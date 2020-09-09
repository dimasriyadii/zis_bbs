<thead>

			<form method="get">
					<label>PILIH TANGGAL   </label>
					<input type="date" name="tanggalawal">
					<label>SAMPAI TANGGAL   </label>
					<input type="date" name="tanggalakhir">
					<a href="#"><button class="btn btn-warning" type="submit" data-toggle="modal"><i"></i> Filter</button></a>
			</form>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Jumlah</th>
						
					</tr>

				</thead>
				<tbody>
				<?php
					$no=0; //variable no
					if(isset($_GET['tanggalawal']) AND isset($_GET['tanggalakhir'])){
						$tglawal = $_GET['tanggalawal'];
						$tglakhir = $_GET['tanggalakhir'];
						$queryinfaq = mysqli_query($connect,"SELECT id_infaq, tanggal, nama, alamat, jumlah FROM infaq WHERE tanggal BETWEEN '$tgl_awal' AND '$tglakhir'");
					}else{
						$queryinfaq = mysqli_query($connect,"SELECT id_infaq, tanggal, nama, alamat, jumlah FROM infaq ");
					}
					while ($infaq = mysqli_fetch_array ($queryinfaq)){
						$no++;

						$uang[] =$infaq['jumlah'];

						$angka = $infaq['jumlah'];
						$angka_format = number_format($angka,2,",",".");
						echo "
						<tr>
							<td>$no</td>
							<td>$infaq[tanggal]</td>
							<td>Rp. $angka_format</td>
							<td>$infaq[beras]</td>
						</tr>";
					}
					$total_uang = array_sum($uang);
					$format = number_format($total_uang,2,",",".");
					echo "
					<tr>
						<td colspan='2'>Jumlah</td>
						<td>Rp. $format</td>
					</tr>";
				?>
				</tbody>