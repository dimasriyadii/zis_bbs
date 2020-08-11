                  <?php
                        $queryberas = mysqli_query($connect,"SELECT SUM(beras) AS jumlah FROM zakat");
                        $databeras = mysqli_fetch_array($queryberas);
                        ?>
                        <?php
                                  $angka = $databeras['jumlah'];
                                  // $angka_format1 = number_format($angka,2,",",".");
                              echo "
                                    <h3  style='font-size: 20px'>$angka<sup>Kilogram</sup></h3>
                                    ";
                  ?>


                                <?php
              
                  if(isset($_POST['tampilkan'])){
                    $tglawal = $_POST['tanggalawal'];
                    $tglakhir = $_POST['tanggalakhir'];
                    
                    $queryberas = mysqli_query($connect,"SELECT SUM(beras) AS jumlah FROM zakat where tanggal BETWEEN '$tglawal' AND '$tglakhir'");
                  }else{
                    $queryberas = mysqli_query($connect,"SELECT SUM(beras) AS jumlah FROM zakat");
                  }
                    while ($databeras = mysqli_fetch_array ($queryberas)){
                      $angka = $databeras['jumlah'];
                    ?>

                    <?php
                      
                      // $angka = $zakat['uang'];
                      // $angka_format = number_format($angka,2,",",".");
                      // var_dump($databeras);
                      echo "
                      <h3  style='font-size: 20px'>$angka<sup>Kilogram</sup></h3>";
                    }
              ?>


                            <?php
                  if(isset($_POST["tampilkan"])){
                    $tglawal = $_POST["tanggalawal"];
                    $tglakhir = $_POST["tanggalakhir"];

                    $no = 1;

                    $sql = "SELECT SUM(beras) AS jumlah FROM zakat where tanggal BETWEEN '$tglawal' AND '$tglakhir'";
                    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));

                        while($data = mysqli_fetch_array($query)){
                          $angka = $query['jumlah'];
                          echo "
                            <h3  style='font-size: 20px'>$angka<sup>Kilogram</sup></h3>";
                        }

                  }
              
              ?>



<form method="get">
            <input type="date" name="tanggalawal">
            <input type="date" name="tanggalakhir">
            <!-- <input type="submit" name="tampilkan" value="TAMPILKAN"> -->
            <a href="#"><button class="btn btn-warning" type="submit" data-toggle="modal"><i"></i> Filter</button></a>
			    </form>