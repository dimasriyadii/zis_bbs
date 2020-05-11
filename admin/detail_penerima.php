<thead>

			<form method="get">
					<label>PILIH TANGGAL   </label>
					<input type="date" name="tanggal">
					<a href="#"><button class="btn btn-warning" type="submit" data-toggle="modal"><i"></i> Filter</button></a>
			</form>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Kelurahan</th>
						<th>RT</th>
						<th>Uang</th>
						<th>Beras</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 0;

					if(isset($_GET['tanggal'])){
						$tgl = $_GET['tanggal'];
						$sql = mysqli_query($connect,"select id_penerima, nama, kelurahan, rt, uang, beras, status from tbl_penerima");
					}else{
						$sql = mysqli_query($connect,"select id_penerima, nama, kelurahan, rt, uang, beras, status from tbl_penerima");
					}
						// $querypenerima = mysqli_query ($connect, "SELECT id_penerimaf, tanggal, nama, alamat, uang, beras 
						// FROM penerima_fitrah  where tanggal='$tanggal'");
						
						// if($querypenerima == false){
						// 	die ("Terjadi Kesalahan : ". mysqli_error($connect));
						// }
						while ($penerima = mysqli_fetch_array ($sql)){
							$no++;
							
							echo "
								<tr>
									<td>$no</td>
									<td>$penerima[nama]</td>
									<td>$penerima[kelurahan]</td>
									<td>$penerima[rt]</td>
									<td>$penerima[uang]</td>
									<td>$penerima[beras]</td>
									<td>$penerima[status]</td>
									
									<td>
										<a href='#' class='open_modal btn btn-primary' id_zakatf='$zakat[id_zakatf]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"penerima_delete.php?id_penerima=$penerima[id_penerima]\")'>Delete</a>
										<a href='cetak.php?id_penerima=$penerima[id_zakat]' target=_blank  class='btn btn-success'>Print</a>
									</td>
								</tr>";
						}
					?>
				</tbody>

				<!-- <a href='cetak.php' class='btn btn-success' id_penerimaf='$penerima[id_penerimaf]'>Print</a> -->