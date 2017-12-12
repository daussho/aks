<?php
   require_once('user/user-auth.php');
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
         include 'navbar/navbar.php';
      ?>
      <center>
         </br></br></br></br></br>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
                  <?php
                     echo "<h2> Welcome, " . $_SESSION['name'] . "</h2>";
                  ?>
                  <br><h2>Jadwal Anda</h2>
               </div>
               <div class="col-sm-4"></div>
            </div>
            <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
                  <table class="table table-bordered">
                     <thead>
                        <?php
                           if(isset($_SESSION['head'])){
                              echo $_SESSION['head'];
                           }
                        ?>
                     </thead>
                  <tbody>
                     <?php
                        if(isset($_SESSION['body'])){
                           echo $_SESSION['body'];
                        }
                     ?>
                     </tbody>
                  </table>
                  
               <div class="col-sm-4"></div>
            </div>
         </div>
      </center>
   </body>
</html>
