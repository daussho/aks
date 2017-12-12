<?php
   require_once("admin/admin-auth.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Search</title>
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
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
               <div class="panel panel-default" align="left">
                  <div class="panel-heading"><h3>Search</div>
                  <div class="panel-body">
                     <form action="admin/absensi.php" method="POST">
                        <div class="form-group">
                           <div class="col-sm-9">
                           	<input type="text" class="form-control" name="idmurid" placeholder="ID Murid" required>
                           </div>
                           
                           <button type="submit" class="btn btn-default" name="button" value="search">Search</button>
                           <button type="submit" class="btn btn-default" name="button" value="download">Download</button>
                     </form>
                     <p><br>
                        <table class="table table-bordered">
							      <thead>
							      	<tr>
								        <th>Tanggal</th>
								        <th>Mata Pelajaran</th>
								        <th>Materi</th>
								        <th>Durasi</th>
							      	</tr>
							      </thead>
								   <tbody>
			                     <?php
			                   		if(isset($_SESSION['result'])){
			                    			echo $_SESSION['result'];
									   		unset($_SESSION['result']);
			                        }
                           	?>
                           </tbody>
							   </table>
                        </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-2"></div>
         </div>
      </div>
   </body>
</html>
