<?php
   require_once('user/user-auth.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Jadwal Fisika</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   </head>
   <body>
      <?php
         include 'navbar/navbar.php';
      ?>
      <center>
         <br>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
                  <h2>Pilihan Jadwal Fisika</h2>
                  <form action="user/jadwal-murid.php" method="POST">
                     <div class="form-group">
                        <?php
                           if(isset($_SESSION['msg'])){
                              echo $_SESSION['msg']."<br><br>";
                              unset($_SESSION['msg']);
                           }
                        ?>
                        <input type="hidden" name="mapel" value="fisika">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>jam</th>
                                 <th>Senin</th>
                                 <th>Selasa</th>
                                 <th>Rabu</th>
                                 <th>Kamis</th>
                                 <th>Jumat</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>07.00</td>
                                 <td><input type="radio" name="jam" value="07.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="07.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="07.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="07.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="07.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>08.00</td>
                                 <td><input type="radio" name="jam" value="08.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="08.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="08.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="08.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="08.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>09.00</td>
                                 <td><input type="radio" name="jam" value="09.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="09.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="09.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="09.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="09.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>10.00</td>
                                 <td><input type="radio" name="jam" value="10.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="10.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="10.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="10.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="10.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>11.00</td>
                                 <td><input type="radio" name="jam" value="11.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="11.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="11.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="11.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="11.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>12.00</td>
                                 <td><input type="radio" name="jam" value="12.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="12.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="12.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="12.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="12.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>13.00</td>
                                 <td><input type="radio" name="jam" value="13.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="13.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="13.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="13.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="13.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>14.00</td>
                                 <td><input type="radio" name="jam" value="14.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="14.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="14.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="14.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="14.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>15.00</td>
                                 <td><input type="radio" name="jam" value="15.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="15.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="15.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="15.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="15.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>16.00</td>
                                 <td><input type="radio" name="jam" value="16.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="16.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="16.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="16.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="16.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>17.00</td>
                                 <td><input type="radio" name="jam" value="17.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="17.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="17.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="17.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="17.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>18.00</td>
                                 <td><input type="radio" name="jam" value="18.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="18.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="18.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="18.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="18.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>19.00</td>
                                 <td><input type="radio" name="jam" value="19.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="19.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="19.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="19.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="19.00,jumat" required></td>
                              </tr>
                              <tr>
                                 <td>20.00</td>
                                 <td><input type="radio" name="jam" value="20.00,senin" required></td>
                                 <td><input type="radio" name="jam" value="20.00,selasa" required></td>
                                 <td><input type="radio" name="jam" value="20.00,rabu" required></td>
                                 <td><input type="radio" name="jam" value="20.00,kamis" required></td>
                                 <td><input type="radio" name="jam" value="20.00,jumat" required></td>
                              </tr>
                           </tbody>
                        </table>
                        
                        <p><button type="submit" class="btn btn-default">Submit</button>
                     </div>
                  </form>
                  </div>
               <div class="col-sm-4"></div>
            </div>
         </div>
      </center>
   </body>
</html>