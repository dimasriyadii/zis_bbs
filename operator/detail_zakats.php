<thead>

			<form method="get">
					<label>PILIH TANGGAL   </label>
					<input type="date" name="tanggal">
					<a href="#"><button class="btn btn-warning" type="submit" data-toggle="modal"><i"></i> Filter</button></a>
			</form>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Uang</th>
						<th>Beras</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$no = 0;

					if(isset($_GET['tanggal'])){
						$tgl = $_GET['tanggal'];
						$sql = mysqli_query($connect,"select id_zakatf, tanggal, nama, alamat, uang, beras from zakat_fitrah where tanggal='$tgl'");
					}else{
						$sql = mysqli_query($connect,"select id_zakatf, tanggal, nama, alamat, uang, beras from zakat_fitrah");
					}
						// $queryzakat = mysqli_query ($connect, "SELECT id_zakatf, tanggal, nama, alamat, uang, beras 
						// FROM zakat_fitrah  where tanggal='$tanggal'");
						
						// if($queryzakat == false){
						// 	die ("Terjadi Kesalahan : ". mysqli_error($connect));
						// }
						while ($zakat = mysqli_fetch_array ($sql)){
							$no++;
						?>

						<?php
							
							$angka = $zakat['uang'];
							$angka_format = number_format($angka,2,",",".");
							
							echo "
								<tr>
									<td>$no</td>
									<td>$zakat[tanggal]</td>
									<td>$zakat[nama]</td>
									<td>$zakat[alamat]</td>
									<td>Rp. $angka_format</td>
									<td>$zakat[beras] Kilogram</td>
									<td>
										
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"zakats_delete.php?id_zakatf=$zakat[id_zakatf]\")'>Delete</a>
										<a href='cetak.php?id_zakatf=$zakat[id_zakatf]' target=_blank  class='btn btn-success'>Print</a>
									</td>
								</tr>";
						}
					?>
				</tbody>

				<!-- <a href='cetak.php' class='btn btn-success' id_zakatf='$zakat[id_zakatf]'>Print</a> -->