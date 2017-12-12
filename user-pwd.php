<?php
   require_once("user/user-auth.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Change password</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
   </head>
   <body>
      <?php
         include 'navbar/navbar.php';
      ?>
      </br></br>
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               <div class="panel panel-default" align="left">
                  <div class="panel-heading"><h3>Change Password</div>
                  <div class="panel-body">
                     <form action="user/user-change-pwd.php" method="POST">
                        <div class="form-group">
                           <?php
                              if(isset($_SESSION['changepwd'])){
                                 echo $_SESSION['msg']."<br><br>";
                                 unset($_SESSION['changepwd']);
                                 unset($_SESSION['msg']);
                              }
                           ?>
                           <label for="pwd">Password lama:</label>
                           <input type="password" class="form-control" name="old-pwd" id="oldpass" required><br>

                           <label for="new-pwd">Password baru:</label>
                           <input type="password" class="form-control" name="new-pwd" id="newpass" required><br>

                           <label for="new-pwd-conf">Konfirmasi Password baru:</label>
                           <input type="password" class="form-control" name="new-pwd-conf" id="new-pass-conf" data-match="#newpass" data-match-error="Password berbeda!" required><br>
 
                           <button type="submit" class="btn btn-default">Submit</button>
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
