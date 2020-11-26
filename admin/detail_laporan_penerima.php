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
						<th>Beras</th>
						<th>Uang</th>
						
						
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
						$querypenerima = mysqli_query($connect,"SELECT id_penerima, tanggal, rt, uang, beras FROM penerima WHERE tanggal BETWEEN '$tgl_awal' AND '$tglakhir'");
					}else{
						$querypenerima = mysqli_query($connect,"SELECT id_penerima, tanggal, rt, uang, beras FROM penerima");
					}
					while ($penerima = mysqli_fetch_array ($querypenerima)){
						
						$no++;

						$uang[] =$penerima['uang'];
						$beras[] =$penerima['beras'];

						$angkab = $penerima['beras'];
						$angkab_format = number_format($angkab,2,",",".");
						$angka = $penerima['uang'];
						$angka_format = number_format($angka,2,",",".");
						echo "
						<tr>
							<td>$no</td>
							<td>$penerima[tanggal]</td>
							<td>$penerima[beras] Kg</td>
							<td>Rp. $angka_format</td>
							
							
						</tr>";
					}
					$total_uang = array_sum($uang);
					$format = number_format($total_uang,2,",",".");

					$total_beras = array_sum($beras);
					$formatb = number_format($total_uang,2,",",".");
					
					echo "
					<tr>
						<td colspan='2'>jumlah</td>
						<td> $formatb Kg</td>
						<td>Rp. $format</td>
					</tr>";
				?>
				</tbody>
