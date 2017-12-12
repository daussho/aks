<?php
   require_once('user/user-auth.php');
   include 'user/get-jadwal.php'
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
                  <form action="user/ambil-jadwal.php" method="POST">
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
                              <?php
                                 $jadwal = getJadwal("fisika");
                              ?>
                              <tr>
                                 <td>07.00</td>
                                 <td><input type="radio" name="jam" value="07.00,senin" required> <?php  echo $jadwal[0][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="07.00,selasa" required> <?php echo $jadwal[0][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="07.00,rabu" required> <?php   echo $jadwal[0][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="07.00,kamis" required> <?php  echo $jadwal[0][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="07.00,jumat" required> <?php  echo $jadwal[0][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>08.00</td>
                                 <td><input type="radio" name="jam" value="08.00,senin" required> <?php  echo $jadwal[1][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="08.00,selasa" required> <?php echo $jadwal[1][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="08.00,rabu" required> <?php   echo $jadwal[1][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="08.00,kamis" required> <?php  echo $jadwal[1][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="08.00,jumat" required> <?php  echo $jadwal[1][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>09.00</td>
                                 <td><input type="radio" name="jam" value="09.00,senin" required> <?php  echo $jadwal[2][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="09.00,selasa" required> <?php echo $jadwal[2][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="09.00,rabu" required> <?php   echo $jadwal[2][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="09.00,kamis" required> <?php  echo $jadwal[2][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="09.00,jumat" required> <?php  echo $jadwal[2][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>10.00</td>
                                 <td><input type="radio" name="jam" value="10.00,senin" required> <?php  echo $jadwal[3][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="10.00,selasa" required> <?php echo $jadwal[3][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="10.00,rabu" required> <?php   echo $jadwal[3][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="10.00,kamis" required> <?php  echo $jadwal[3][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="10.00,jumat" required> <?php  echo $jadwal[3][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>11.00</td>
                                 <td><input type="radio" name="jam" value="11.00,senin" required> <?php  echo $jadwal[4][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="11.00,selasa" required> <?php echo $jadwal[4][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="11.00,rabu" required> <?php   echo $jadwal[4][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="11.00,kamis" required> <?php  echo $jadwal[4][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="11.00,jumat" required> <?php  echo $jadwal[4][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>12.00</td>
                                 <td><input type="radio" name="jam" value="12.00,senin" required> <?php  echo $jadwal[5][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="12.00,selasa" required> <?php echo $jadwal[5][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="12.00,rabu" required> <?php   echo $jadwal[5][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="12.00,kamis" required> <?php  echo $jadwal[5][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="12.00,jumat" required> <?php  echo $jadwal[5][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>13.00</td>
                                 <td><input type="radio" name="jam" value="13.00,senin" required> <?php  echo $jadwal[6][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="13.00,selasa" required> <?php echo $jadwal[6][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="13.00,rabu" required> <?php   echo $jadwal[6][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="13.00,kamis" required> <?php  echo $jadwal[6][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="13.00,jumat" required> <?php  echo $jadwal[6][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>14.00</td>
                                 <td><input type="radio" name="jam" value="14.00,senin" required> <?php  echo $jadwal[7][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="14.00,selasa" required> <?php echo $jadwal[7][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="14.00,rabu" required> <?php   echo $jadwal[7][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="14.00,kamis" required> <?php  echo $jadwal[7][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="14.00,jumat" required> <?php  echo $jadwal[7][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>15.00</td>
                                 <td><input type="radio" name="jam" value="15.00,senin" required> <?php  echo $jadwal[8][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="15.00,selasa" required> <?php echo $jadwal[8][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="15.00,rabu" required> <?php   echo $jadwal[8][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="15.00,kamis" required> <?php  echo $jadwal[8][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="15.00,jumat" required> <?php  echo $jadwal[8][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>16.00</td>
                                 <td><input type="radio" name="jam" value="16.00,senin" required> <?php  echo $jadwal[9][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="16.00,selasa" required> <?php echo $jadwal[9][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="16.00,rabu" required> <?php   echo $jadwal[9][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="16.00,kamis" required> <?php  echo $jadwal[9][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="16.00,jumat" required> <?php  echo $jadwal[9][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>17.00</td>
                                 <td><input type="radio" name="jam" value="17.00,senin" required> <?php  echo $jadwal[10][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="17.00,selasa" required> <?php echo $jadwal[10][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="17.00,rabu" required> <?php   echo $jadwal[10][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="17.00,kamis" required> <?php  echo $jadwal[10][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="17.00,jumat" required> <?php  echo $jadwal[10][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>18.00</td>
                                 <td><input type="radio" name="jam" value="18.00,senin" required> <?php  echo $jadwal[11][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="18.00,selasa" required> <?php echo $jadwal[11][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="18.00,rabu" required> <?php   echo $jadwal[11][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="18.00,kamis" required> <?php  echo $jadwal[11][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="18.00,jumat" required> <?php  echo $jadwal[11][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>19.00</td>
                                 <td><input type="radio" name="jam" value="19.00,senin" required> <?php  echo $jadwal[12][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="19.00,selasa" required> <?php echo $jadwal[12][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="19.00,rabu" required> <?php   echo $jadwal[12][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="19.00,kamis" required> <?php  echo $jadwal[12][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="19.00,jumat" required> <?php  echo $jadwal[12][4]." orang"?></td>
                              </tr>
                              <tr>
                                 <td>20.00</td>
                                 <td><input type="radio" name="jam" value="20.00,senin" required> <?php  echo $jadwal[13][0]." orang"?></td>
                                 <td><input type="radio" name="jam" value="20.00,selasa" required> <?php echo $jadwal[13][1]." orang"?></td>
                                 <td><input type="radio" name="jam" value="20.00,rabu" required> <?php   echo $jadwal[13][2]." orang"?></td>
                                 <td><input type="radio" name="jam" value="20.00,kamis" required> <?php  echo $jadwal[13][3]." orang"?></td>
                                 <td><input type="radio" name="jam" value="20.00,jumat" required> <?php  echo $jadwal[13][4]." orang"?></td>
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