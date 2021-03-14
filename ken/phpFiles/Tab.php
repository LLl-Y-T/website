<div class="container mt-4">
   
   <table  border="1"align="center" width="40%" cellpadding="5"> 

   <tr>
   <th>id</th>
   <th>Фото</th>
   <th>Ф.И.О.</th>
   <th>Дата</th>
   <th>ИИН</th>
   <th>Номер Телефона</th>
   <th>Адрес</th>
   </tr>
  <?php
    $mysql=new mysqli('localhost','root','root','register-bd');
    $result =  mysqli_query($mysql, "SELECT * FROM users");
    $x=0;
      while ($row=mysqli_fetch_assoc($result)) 
     {
       $user[$x]=$row;
       $x++;
       echo 
 
       "<tr>
       <td>",
  
        $row['id'] ,
   
       "</td> 
       <td>", 

       "<img src='".$row['Photo']."'width='100px' alt'".$row['Photo']."'>" ,
  
       "</td> 
       <td>", 
  
       $row['FIO'] ,
  
        "</td> 
       <td>",
  
       $row['DDate'] ,
   
       "</td> 
        <td>",
  
       $row['IIN'],
  
       " </td> 
       <td>",
  
       $row['nnumber'],
  
       "</td>
       <td>",
  
       $row['adres'],
  
       "</td>
      </tr>";
      }

      exit();
     $mysql->close();   
   ?>