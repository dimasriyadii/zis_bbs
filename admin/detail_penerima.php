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
					$page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
					// Jumlah data per halaman 5 perpage
					$limit = 5;
					$limitStart = ($page - 1) * $limit;
					$no = $limitStart + 0;

					if(isset($_GET['tanggal'])){
						$tgl = $_GET['tanggal'];
						$sql = mysqli_query($connect,"select * from penerima");
					}else{
						$sql = mysqli_query($connect,"select * from penerima");
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
									<td>$penerima[beras] Kilogram</td>
									<td>$penerima[status]</td>
									
									<td>
										<a href='#' class='open_modal btn btn-primary' id_penerima='$penerima[id_penerima]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"penerima_delete.php?id_penerima=$penerima[id_penerima]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>

				<!-- <a href='cetak.php' class='btn btn-success' id_penerimaf='$penerima[id_penerimaf]'>Print</a> -->