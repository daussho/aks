<?php
   require_once('admin/admin-auth.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   </head>
   <body>
      <?php
         include 'navbar/admin-navbar.html';
      ?>
      <center>
         </br></br></br></br></br>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
                  <div class="list-group" align="left">
                     <a href="search.php" class="list-group-item">Lihat absensi murid</a>
                     <a href="register.php" class="list-group-item">Registrasi</a>
                     <a href="create-class.php" class="list-group-item">Create class</a>
                     <a href="enroll.php" class="list-group-item">Enroll murid</a>
                     <a href="query.php" class="list-group-item">Manual Query</a>
                  </div>
               </div>
               <div class="col-sm-4"></div>
            </div>
         </div>
      </center>
   </body>
</html>
