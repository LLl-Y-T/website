<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
  <script type="text/javascript" src="jquery-1.11.1.min.js"></script> 
  <script type="text/javascript" src="jquery-form.js"></script>  
  <script type="text/javascript" src="main.js"></script>
  
</head>

<body>

  </form>

    <div class="container mt-4">
        
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
                
                    <Input type="text" class="FIO" name="FIO"  placeholder="Введите Ф.И.О."><br>
                    <br>
                    <Input type="text"  class="DDate" name="DDate"  placeholder=" Введите Дату рождения"><br>
                    <br>
                    <Input type="text" class="IIN" name="IIN" placeholder=" Введите ИИН"><br>
                    <br>
                    <Input type="text" class="nnumber" name="nnumber"  placeholder=" Введите Номер Телефона" ><br>
                    <br>
                    <Input type="text" class="adres" name="adres"  placeholder=" Введите адрес"><br>        
                    <br>   
                    
                    <input name="sortpic" type="file" id="sortpicture" /><br> 
                  
                    <div id="load"></div>
                    <br> 
                    <button class="Otpr btn-success" type="submit" id="Otpr" >Зарегистрировать</button> 
            
            </div>     
            
            
            <div class="col">
                <h1>Редактирование</h1>
                    
                    <Input type="text" class="id" name="id"  placeholder="id"><br>
                    <br>
                    <Input type="text" class="FIORed" name="FIORed"  placeholder="Введите Ф.И.О."><br>
                    <br>
                    <Input type="text"  class="DDateRed" name="DDateRed"  placeholder=" Введите Дату рождения"><br>
                    <br>
                    <Input type="text" class="IINRed" name="IINRed" placeholder=" Введите ИИН"><br>
                    <br>
                    <Input type="text" class="nnumberRed" name="nnumberRed"  placeholder=" Введите Номер Телефона" ><br>
                    <br>
                    <Input type="text" class="adresRed" name="adresRed"  placeholder=" Введите адрес"><br>        
                    <br>   
                    
                    <input name="sortpic" type="file" id="sortpictureRed" /><br> 
                  
                    <div id="load"></div>
                    <br> 
                    <button class="red btn-success" type="submit" id="red" >Редактировать</button> 
            </div>
        </div>
    </div>


    <script>
        var Photo
        $('#Otpr').on('click', function() 
       {
       var file_data = $('#sortpicture').prop('files')[0];
       var form_data = new FormData();
       form_data.append('file', file_data);

        $.ajax
        ({      
                url: 'Img.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(data){
                  Photo=data;
                }
        });
      });


      $(document).ready ();
      
      $('button.Otpr').on('click', function() {
        setTimeout(() => { 
          var FIOValue = $('input.FIO').val();

        var DDateValue = $('input.DDate').val();
      
      
        var IINValue = $('input.IIN').val();
      
      
        var nnumberValue = $('input.nnumber').val();
      
      
        var adresValue = $('input.adres').val();
      

       $.ajax
       ({
             method: "POST",
             url: "phpFiles/some.php",
             data: {photo:Photo,FIO: FIOValue, DDate: DDateValue ,IIN: IINValue, nnumber: nnumberValue ,adres: adresValue}
             
        }) }, 1000); 
         
         }); 
        
         var PhotoRed
         $('#red').on('click', function() 
        {
         var file_data = $('#sortpictureRed').prop('files')[0];
         var form_data = new FormData();
         form_data.append('file', file_data);

          $.ajax
          ({      
                url: 'ImgRed.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(data){
                  PhotoRed=data;
                }
         });
        });
         $('#red').on('click', function()
       {      
         setTimeout(() => { 
          var idValue = $('input.id').val();    
          var FIORedValue = $('input.FIORed').val();
          var DDateRedValue = $('input.DDateRed').val();         
          var IINRedValue = $('input.IINRed').val();            
          var nnumberRedValue = $('input.nnumberRed').val();       
          var adresRedValue = $('input.adresRed').val();
         $.ajax({ 
                 method: "POST",
                 url: 'phpFiles/Red.php',
                 data: {photo:PhotoRed,id: idValue,FIORed: FIORedValue,DDateRed:DDateRedValue,IINRed:IINRedValue,nnumberRed:nnumberRedValue,adresRed:adresRedValue}
                })}, 1000); 
        });   
      </script> 

      <script type="text/javascript">
       function mode() {
         $.ajax({
          url: 'phpFiles/Tab.php',
          success: function(data) 
             {
              $('#display').html(data);
             }
            });
           };

          setInterval(mode, 10);
               </script>
        <div id="display"></div>
    </div>
    
</body>

</html>