



	<thead>
			<form method="get">
					<label>PILIH TANGGAL   </label>
					<input type="date" name="tanggal">
					<a href="#"><button class="btn btn-warning" type="submit" data-toggle="modal"><i"></i> Filter</button></a>
			</form>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Jumlah</th>
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
						$queryinfaq = mysqli_query($connect, "SELECT * FROM infaq  WHERE tanggal='$tgl' LIMIT ".$limitStart.",".$limit );
					}else{
						$queryinfaq = mysqli_query($connect, "SELECT * FROM infaq LIMIT ".$limitStart.",".$limit);
					}

						//$queryinfaq = mysqli_query ($connect, "SELECT id_infaq, tanggal, nama, alamat, jumlah FROM infaq");
						//if($queryinfaq == false){
						//	die ("Terjadi Kesalahan : ". mysqli_error($connect));
						//}
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
									<td>$infaq[nama]</td>
									<td>$infaq[alamat]</td>
									<td>Rp. $angka_format</td>
									<td>
										<a href='#' class='open_modal btn btn-primary' id_infaq='$infaq[id_infaq]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"infaq_delete.php?id_infaq=$infaq[id_infaq]\")'>Delete</a>
										<a href='cetakinfaq.php?id_infaq=$infaq[id_infaq]' target=_blank  class='btn btn-success'>Print</a>
									</td>
								</tr>";
						}
					?>
				</tbody>
