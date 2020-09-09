<thead>

			<form method="get">
					<label>PILIH TANGGAL   </label>
					<input type="date" name="tanggalawal">
					<input type="date" name="tanggalakhir">
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
					$no=0; //variable no
					if(isset($_GET['tanggalawal']) AND isset($_GET['tanggalakhir'])){
						$tglawal = $_GET['tanggalawal'];
						$tglakhir = $_GET['tanggalakhir'];
						$querykeperluan = mysqli_query($connect,"SELECT id_pengeluaran, id_keperluan, tanggal, jumlah FROM infaq_pengeluaran  WHERE tanggal BETWEEN '$tgl_awal' AND '$tglakhir'
						INNER JOIN keperluan ON id_keperluan = keperluan");
					}else{
						$querykeperluan = mysqli_query($connect,"SELECT id_pengeluaran, id_keperluan, tanggal, jumlah FROM infaq_pengeluaran 
						INNER JOIN keperluan ON id_keperluan = keperluan");
					}
					while ($keperluan = mysqli_fetch_array ($querykeperluan)){
						$no++;

						$uang[] =$keperluan['jumlah'];

						$angka = $keperluan['jumlah'];
						$angka_format = number_format($angka,2,",",".");
						echo "
						<tr>
							<td>$no</td>
							<td>$keperluan[tanggal]</td>
							<td>$keperluan[id_keperluan]</td>
							<td>Rp. $angka_format</td>
						</tr>";
					}
					$total_uang = array_sum($uang);
					$format = number_format($total_uang,2,",",".");
					echo "
					<tr>
						<td colspan='3'>Jumlah</td>
						<td>Rp. $format</td>
					</tr>";
				?>
				</tbody>
