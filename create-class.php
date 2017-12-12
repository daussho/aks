<?php
   require_once("admin/admin-auth.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Create Class</title>
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
                  <div class="panel-heading"><h3>Create Class</div>
                  <div class="panel-body">
                     <form action="admin/cclass.php" method="POST">
                        <div class="form-group">
                           <?php
                              if(isset($_SESSION['msg'])){
                                 echo $_SESSION['msg']."<br><br>";
                                 unset($_SESSION['msg']);
                              }
                           ?>
                           <input type="text" class="form-control" name="idkelas" placeholder="ID Kelas" required><br>
                           <select class="form-control" name="mapel" required>
                              <option value="matematika">Matematika</option>
                              <option value="fisika">Fisika</option>
                              <option value="kimia">Kimia</option>
                           </select><br>

                           <input type="text" class="form-control" name="jml" placeholder="Jumlah Murid" required><br>
                           
                           <select class="form-control" name="hari" required>
                              <option value="senin">Senin</option>
                              <option value="selasa">Selasa</option>
                              <option value="rabu">Rabu</option>
                              <option value="kamis">Kamis</option>
                              <option value="jumat">Jumat</option>
                           </select><br>
                           
                           <select class="form-control" name="jam" required>
                              <option value="07.00">07.00</option>
                              <option value="08.00">08.00</option>
                              <option value="09.00">09.00</option>
                              <option value="10.00">10.00</option>
                              <option value="11.00">11.00</option>
                              <option value="12.00">12.00</option>
                              <option value="13.00">13.00</option>
                              <option value="14.00">14.00</option>
                              <option value="15.00">15.00</option>
                              <option value="16.00">16.00</option>
                              <option value="17.00">17.00</option>
                              <option value="18.00">18.00</option>
                              <option value="19.00">19.00</option>
                              <option value="20.00">20.00</option>
                           </select><br>
                           
                           <select class="form-control" name="tipe" required>
                              <option value="private">Private</option>
                              <option value="besar">Besar</option>
                           </select><br>
                           
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
