<?php/*
       if(isset($_POST) AND $_SERVER['REQUEST_METHOD'] == "POST"){
       $formats = array("jpg","gif","png");
       $format = @end(explode(".",$_FILES['file']['name']));
       if(in_array($format,$formats))
       {    
        if(is_uploaded_file($_FILES['file']['tmp_name']))
        {
         $uploaddir = 'upload/';
         $uploadfile = $uploaddir . basename($_FILES['file']['name']."_".rand(0,99999)."_".time().".".$format);
         move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
        }
      
       }
     
       }*/
      ?>
      <?php
      $formats = array("jpg","gif","png");
      $format = @end(explode(".",$_FILES['file']['name']));
      if(in_array($format,$formats))
       {
          if ( 0 < $_FILES['file']['error'] ) 
          {
              echo 'Error: ' . $_FILES['file']['error'] . '<br>';
          }
          else 
          {    $uploadfile = 'upload/' . $_FILES['file']['name']."_".rand(0,99999)."_".time().".".$format;
              move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
              echo $uploadfile;
          }
        }
      ?>
