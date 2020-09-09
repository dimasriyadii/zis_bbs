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
						<th>Id Keperluan</th>
						
						<th>Jumlah</th>
						
					</tr>

				</thead>
				<tbody>
				<?php


// $querypasien = "SELECT pasien.id_pasien, pasien.nama_pasien, pasien.alamat, pasien.umur, pasien.tgl_lahir, pasien.jenis_kelamin, pasien.penyakit, dokter.nama_dokter, 
// obat.nama_obat FROM pasien
// 			INNER JOIN dokter ON pasien.id_dokter=dokter.id_dokter INNER JOIN obat ON pasien.id_obat=obat.id_obat";

					$no=0; //variable no
					if(isset($_GET['tanggalawal']) AND isset($_GET['tanggalakhir'])){
						$tglawal = $_GET['tanggalawal'];
						$tglakhir = $_GET['tanggalakhir'];
						$querykeperluan = mysqli_query($connect,"SELECT infaq_pengeluaran.id_pengeluaran, infaq_pengeluaran.id_keperluan, infaq_pengeluaran.tanggal, 
						infaq_pengeluaran.jumlah, keperluan.keperluan FROM infaq_pengeluaran 
						INNER JOIN keperluan ON infaq_pengeluaran.id_keperluan=keperluan.id_keperluan
						WHERE tanggal BETWEEN '$tgl_awal' AND '$tglakhir'");
					}else{
						$querykeperluan = mysqli_query($connect,"SELECT infaq_pengeluaran.id_pengeluaran, infaq_pengeluaran.id_keperluan, infaq_pengeluaran.tanggal, 
						infaq_pengeluaran.jumlah, keperluan.keperluan FROM infaq_pengeluaran INNER JOIN keperluan ON infaq_pengeluaran.id_keperluan=keperluan.id_keperluan");
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
							<td>$keperluan[keperluan]</td>
							
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
