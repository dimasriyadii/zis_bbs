



	<thead>
			<form method="get">
					<label>PILIH TANGGAL   </label>
					<input type="date" name="tanggal">
					<a href="#"><button class="btn btn-warning" type="submit" data-toggle="modal"><i"></i> Filter</button></a>
			</form>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Keperluan</th>
						<th>Jumlah</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 0;
					if(isset($_GET['tanggal'])){
						$tgl = $_GET['tanggal'];
						$queryinfaq = mysqli_query($connect,"SELECT * FROM infaq_pengeluaran WHERE tanggal='$tgl'");
					}else{
						$queryinfaq = mysqli_query($connect,"SELECT * FROM infaq_pengeluaran");
					}
						while ($infaq = mysqli_fetch_array ($queryinfaq)){
							$no++;

						?>

						<?php
						$total = 0; 
							$angka = $infaq['jumlah'];
							$angka_format = number_format($angka,2,",",".");
							echo "
								<tr>
									<td>$no</td>
									<td>$infaq[tanggal]</td>
									<td>$infaq[keperluan]</td>
									<td>Rp. $angka_format</td>
								</tr>";
						}
					?>
				</tbody>
