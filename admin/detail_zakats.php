<thead>

			<form method="get">
					<label>PILIH TANGGAL   </label>
					<input type="date" name="tanggal">
					<a href="#"><button class="btn btn-warning" type="submit" data-toggle="modal"><i"></i> Filter</button></a>
			</form>

		<?php
		
		?>
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

	$page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
      
      // Jumlah data per halaman 5 perpage
      $limit = 5;

	  $limitStart = ($page - 1) * $limit;
	  $no = $limitStart + 0;

					if(isset($_GET['tanggal'])){
						$tgl = $_GET['tanggal'];
						// $connect,"SELECT id_zakatf, tanggal, nama, alamat, uang, beras FROM zakat WHERE tanggal='$tgl'"

						$sql = mysqli_query($connect, "SELECT * FROM zakat  WHERE tanggal='$tgl' LIMIT ".$limitStart.",".$limit );
					}else{
						$sql = mysqli_query($connect, "SELECT * FROM zakat LIMIT ".$limitStart.",".$limit);
					} 
						
						while ($zakat = mysqli_fetch_array ($sql)){
							$no++;
						?>

						<?php
							
							$angka = $zakat['uang'];
							$angka_format = number_format($angka,2,",",".");
							
							echo "
								<tr>
									<td>$no</td>
									<td>$zakat[tanggal]</td>
									<td>$zakat[nama]</td>
									<td>$zakat[alamat]</td>
									<td>Rp. $angka_format</td>
									<td>$zakat[beras] Kilogram</td>
									<td>
										<a href='#' class='open_modal btn btn-primary' id_zakatf='$zakat[id_zakatf]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"zakats_delete.php?id_zakatf=$zakat[id_zakatf]\")'>Delete</a>
										<a href='cetak.php?id_zakatf=$zakat[id_zakatf]' target=_blank  class='btn btn-success'>Print</a>
									</td>
								</tr>";
						}
					?>
				</tbody>

				<!-- <a href='cetak.php' class='btn btn-success' id_zakatf='$zakat[id_zakatf]'>Print</a> -->