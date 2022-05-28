<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="192x192"  href="/icn/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/icn/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="/icn/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/icn/favicon-16x16.png">
      <link rel="manifest" href="/icn/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="/icn/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="01.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <title>KiraiEEE - File v0.1</title>
   </head>
   <body>
      <section>
         <div class="upload">
            <div class="part">
               <form method="post" enctype="multipart/form-data">
                  <input class="" type="File" name="file">
                  <button class="button" type="submit" name="submit" value=""><i class="fas fa-upload"></i>   Upload</button>
                  <div class="texty">
                     <?php 
                        if (isset($_POST["submit"]))
                         {  
                            $pname = "Senpai"."_".rand(1000,10000)."_".$_FILES["file"]["name"];
                            $tname = $_FILES["file"]["tmp_name"];
                            $uploads_dir = 'uploads';
                            move_uploaded_file($tname, $uploads_dir.'/'.$pname);
                            echo "Done!";
                            header("Refresh:0");   
                        }    
                        ?>
                  </div>
               </form>
            </div>
         </div>
      </section>
   </body>
</html>