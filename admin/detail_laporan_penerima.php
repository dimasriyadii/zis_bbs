<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Beras</th>
						<th>Uang</th>
						
						
					</tr>

				</thead>
				<tbody>
				<?php


				if (isset($_POST['submit'])) {
					$date1 = $_POST['tglawal'];
					$date2 = $_POST['tglakhir'];
				   
					if (!empty($date1) && !empty($date2)) {
					 // perintah tampil data berdasarkan range tanggal
					 $q = mysqli_query($connect, "SELECT * FROM penerima WHERE tanggal BETWEEN '$date1' and '$date2'"); 
					} else {
					 // perintah tampil semua data
					 $q = mysqli_query($connect, "SELECT * FROM penerima"); 
					}
				   } else {
					// perintah tampil semua data
					$q = mysqli_query($connect, "SELECT * FROM penerima");
				   }

					$no=0; //variable no
					if(isset($_GET['submit'])){
						$tglawal = $_GET['tanggalawal'];
						$tglakhir = $_GET['tanggalakhir'];
 

						$querypenerima = mysqli_query($connect,"SELECT * FROM penerima WHERE tanggal BETWEEN '$tgl_awal' AND '$tglakhir'");
					}else{
						$querypenerima = mysqli_query($connect,"SELECT * FROM penerima");
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


				<form method="POST" action="" class="form-inline mt-3">
					<label for="tglawal">Tanggal mulai </label>
					<input type="date" name="tglawal" id="tglawal" class="form-control mr-2">
					<label for="tglakhir">sampai </label>
					<input type="date" name="tglakhir" id="tglakhir" class="form-control mr-2">
					<button type="submit" name="submit" class="btn btn-primary">Cari</button>
				</form>

				<?php
				if (isset($_POST['submit'])) {
					$date1 = $_POST['tglawal'];
					$date2 = $_POST['tglakhir'];
				   
					if (!empty($date1) && !empty($date2)) {
					 // perintah tampil data berdasarkan range tanggal
					 
					 $q = mysqli_query($connect, "SELECT i.id_pengeluaran, i.id_keperluan, i.tanggal, i.jumlah FROM infaq_pengeluaran AS i INNER JOIN keperluan AS k ON i.id_pengeluaran = k.id_keperluan WHERE tanggal BETWEEN '$date1' and '$date2'"); 
					} else {
					 // perintah tampil semua data
					 $q = mysqli_query($connect, "SELECT infaq_pengeluaran.id_pengeluaran, infaq_pengeluaran.id_keperluan, infaq_pengeluaran.tanggal, 
					 infaq_pengeluaran.jumlah, keperluan.keperluan FROM infaq_pengeluaran INNER JOIN keperluan ON infaq_pengeluaran.id_keperluan=keperluan.id_keperluan"); 
					}
				   } else {
					// perintah tampil semua data
					$q = mysqli_query($connect, "SELECT infaq_pengeluaran.id_pengeluaran, infaq_pengeluaran.id_keperluan, infaq_pengeluaran.tanggal, 
					infaq_pengeluaran.jumlah, keperluan.keperluan FROM infaq_pengeluaran INNER JOIN keperluan ON infaq_pengeluaran.id_keperluan=keperluan.id_keperluan");
				   }
				   
				   
			?>
				<table class="table table-bordered mt-5">
					<tr>
					<th>#</th>
					<th>Tanggal</th>
					<th>Keperluan</th>
					<th>Jumlah</th>
					</tr>

					<?php
					
					$no = 1;

					while ($r = $q->fetch_assoc()) {
					?>
						
						
				<?php
					$uang[] =$r['jumlah'];
					$angka_format[] =$r['jumlah'];
					$angka_format = number_format($angka,2,",",".");
				?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= date('d-M-Y', strtotime($r['tanggal'])) ?></td>
						<td><?= $r['keperluan'] ?></td>
						<td>Rp <?= $angka_format ?></td>
					</tr>

					<?php   
					}
					?>
				<?php
					$total_uang = array_sum($uang);
					$format = number_format($total_uang,2,",",".");
				?>
					<tr>
						<td colspan='3'>jumlah</td>
						<td>Rp. <?= $format ?></td>
					</tr>
