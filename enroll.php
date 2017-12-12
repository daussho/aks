<?php
   require_once("admin/admin-auth.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Enroll Murid</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
   </head>
   <body>
      <?php
         include 'navbar/admin-navbar.html';
      ?>
      </br></br>
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               <div class="panel panel-default" align="left">
                  <div class="panel-heading"><h3>Enroll Murid</div>
                  <div class="panel-body">
                     <form action="admin/enroll-murid.php" method="POST">
                        <div class="form-group">
                           <?php
                              if(isset($_SESSION['msg'])){
                                 echo $_SESSION['msg']."<br><br>";
                                 unset($_SESSION['msg']);
                              }
                           ?>
                           <input type="text" class="form-control" name="idkelas" placeholder="ID Kelas" required><br>
                           <input type="text" class="form-control" name="idmurid" placeholder="ID Murid" required><br>
                           
                           <p><button type="submit" class="btn btn-default">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-sm-4"></div>
         </div>
      </div>
   </body>
</html>
