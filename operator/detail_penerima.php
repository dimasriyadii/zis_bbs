<thead>

			<!-- <form method="get">
					<label>PILIH TANGGAL   </label>
					<input type="date" name="tanggal">
					<a href="#"><button class="btn btn-warning" type="submit" data-toggle="modal"><i"></i> Filter</button></a>
			</form> -->
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
						
						while ($penerima = mysqli_fetch_array ($sql)){
							$no++;
							?>


						<?php

							$angka = $penerima['uang'];
							$angka_format = number_format($angka,2,",",".");

							echo "
								<tr>
									<td>$no</td>
									<td>$penerima[nama]</td>
									<td>$penerima[kelurahan]</td>
									<td>$penerima[rt]</td>
									<td>Rp. $angka_format</td>
									<td>$penerima[beras]</td>
									<td>$penerima[status]</td>
									
									<td>
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"penerima_delete.php?id_penerima=$penerima[id_penerima]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>

				<!-- <a href='cetak.php' class='btn btn-success' id_penerimaf='$penerima[id_penerimaf]'>Print</a> -->