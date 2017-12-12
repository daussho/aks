<?php
   require_once("user/user-auth.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <title>kehadiran</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
                  <div class="panel-heading"><h3>Kehadiran</div>
                  <div class="panel-body">
                     <form action="user/absen.php" method="POST">
                        <div class="form-group">
                           <?php
                              if(isset($_SESSION['msg'])){
                                 echo $_SESSION['msg']."<br><br>";
                                 unset($_SESSION['msg']);
                              }
                           ?>
                           <input type="text" class="form-control" name="idmurid" placeholder="ID murid" required><br>
                           
                           <select class="form-control" name="mapel" required>
                              <option value="matematika">Matematika</option>
                              <option value="fisika">Fisika</option>
                              <option value="kimia">Kimia</option>
                           </select><br>
            
                           <div class="input-group">
                              <input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text"/>
                              <div class="input-group-addon">
                                 <i class="fa fa-calendar"></i>
                              </div>
                           </div>
                           <br>

                           <input type="text" class="form-control" name="tempat" placeholder="Tempat" required><br>
                           <input type="text" class="form-control" name="materi" placeholder="Materi" required><br>

                           <select class="form-control" name="tipe" required>
                              <option value="private">Private</option>
                              <option value="besar">Kelas besar</option>
                           </select><br>

                           <input type="text" class="form-control" name="durasi" placeholder="Durasi" required><br>

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
<!-- Bootstrap Date-Picker Plugin -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

      <script>
          $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            var options={
              format: 'yyyy-mm-dd',
              container: container,
              todayHighlight: true,
              autoclose: true,
            };
            date_input.datepicker(options);
          })
      </script>