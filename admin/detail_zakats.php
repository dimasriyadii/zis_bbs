<thead>
			<form method="get">
					<label>PILIH TANGGAL</label>
					<input type="date" name="tanggal">
					<a href="#"><button class="btn btn-light" type="submit" data-target="#ModalAdd" data-toggle="modal"><i"></i> Filter</button></a>
					
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
							
							echo "
								<tr>
									<td>$no</td>
									<td>$zakat[tanggal]</td>
									<td>$zakat[nama]</td>
									<td>$zakat[alamat]</td>
									<td>$zakat[uang]</td>
									<td>$zakat[beras]</td>
									<td>
										<a href='#' class='open_modal btn btn-primary' id_zakatf='$zakat[id_zakatf]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"zakats_delete.php?id_zakatf=$zakat[id_zakatf]\")'>Delete</a>
<<<<<<< HEAD
										<a href='cetak.php?id_zakatf=$zakat[id_zakatf]' target=_blank  class='btn btn-success'>Print</a>
=======
										<a href='test.php?id_zakatf=$zakat[id_zakatf]' class='btn btn-success' >Print</a>
										<a href='cetak.php?id_zakatf=$zakat[id_zakatf]' class='btn btn-info'>Printtt</a>
>>>>>>> 338b7cf20014fad1106e4ab0d29697cf2a1f7882
									</td>
								</tr>";
						}
					?>
				</tbody>

				<!-- <a href='cetak.php' class='btn btn-success' id_zakatf='$zakat[id_zakatf]'>Print</a> -->