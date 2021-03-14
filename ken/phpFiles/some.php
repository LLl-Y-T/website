<?php 

        $data = [
    "photo" => $_POST['photo'],
    "FIO" => $_POST['FIO'],
    "DDate" =>$_POST['DDate'],
    "IIN" => $_POST['IIN'],
    "nnumber" => $_POST['nnumber'],
    "adres" => $_POST['adres']
        ];
        if(  mb_strlen($data['photo'])>6 
        and $data['FIO']!=null 
        and  $data['DDate']!=null 
        and  $data['IIN']!=null 
        and  $data['nnumber']!=null 
        and  $data['adres']!=null)
        {      
           $connection = new PDO('mysql:host=localhost;dbname=register-bd','root','root');
           $sql = 'INSERT INTO users (photo,FIO,DDate,IIN,nnumber,adres) VALUES (:photo,:FIO,:DDate,:IIN,:nnumber,:adres)';
           $statement = $connection->prepare ($sql);
           $result = $statement->execute ($data);
           var_dump($result);
        }
?>

            