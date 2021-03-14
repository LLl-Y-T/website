<?PHP 
 $dataphoto = [
    "id" => $_POST['id'],
    "Photo" => $_POST['photo']
        ]; 
 $dataFIO = [
    "id" => $_POST['id'],
    "FIO" =>$_POST['FIORed']
        ];
 $dataDDate = [
    "id" => $_POST['id'],
    "DDate" => $_POST['DDateRed']
        ];  

 $dataIIN = [
    "id" => $_POST['id'],
    "IIN" => $_POST['IINRed']
        ];                     
 $datannumber = [
    "id" => $_POST['id'],
    "nnumber" => $_POST['nnumberRed']
        ];
 $dataadres = [
    "id" => $_POST['id'],
    "adres" => $_POST['adresRed']
        ];    

        $connection = new PDO('mysql:host=localhost;dbname=register-bd','root','root');

        if(mb_strlen($dataphoto['Photo'])>6)
        {
            $sql ='UPDATE users SET Photo=:Photo WHERE id=:id';  
        $statement = $connection->prepare ($sql);
        $result = $statement->execute ($dataphoto);
        var_dump($result);
        }
    if(mb_strlen($dataFIO['FIO'])>5)
    {
        $sql ='UPDATE users SET FIO=:FIO WHERE id=:id';  
    $statement = $connection->prepare ($sql);
    $result = $statement->execute ($dataFIO);
    var_dump($result);
    }
    if(mb_strlen($dataDDate['DDate'])>6)
    {
        $sql ='UPDATE users SET DDate=:DDate WHERE id=:id';  
    $statement = $connection->prepare ($sql);
    $result = $statement->execute ($dataDDate);
    var_dump($result);
    }
 
    if(mb_strlen($dataIIN['IIN'])>10)
    {
        $sql ='UPDATE users SET IIN=:IIN WHERE id=:id';  
    $statement = $connection->prepare ($sql);
    $result = $statement->execute ($dataIIN);
    var_dump($result);
    }
    if(mb_strlen($datannumber['nnumber'])>10)
    {
        $sql ='UPDATE users SET nnumber=:nnumber WHERE id=:id';  
    $statement = $connection->prepare ($sql);
    $result = $statement->execute ($datannumber);
    var_dump($result);
    }  
     if(mb_strlen($dataadres['adres'])>10)
    {
        $sql ='UPDATE users SET adres=:adres WHERE id=:id';  
    $statement = $connection->prepare ($sql);
    $result = $statement->execute ($dataadres);
    var_dump($result);
    }
?>