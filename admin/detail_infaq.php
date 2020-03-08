<thead>
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
					$no = 0;
						$queryinfaq = mysqli_query ($connect, "SELECT id_infaq, tanggal, nama, alamat, jumlah FROM infaq");
						if($queryinfaq == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($infaq = mysqli_fetch_array ($queryinfaq)){
							$no++;
							
							echo "
								<tr>
									<td>$no</td>
									<td>$infaq[tanggal]</td>
									<td>$infaq[nama]</td>
									<td>$infaq[alamat]</td>
									<td>$infaq[jumlah]</td>

									<td>
										<a href='#' class='open_modal btn btn-primary' id_infaq='$infaq[id_infaq]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"infaq_delete.php?id_infaq=$infaq[id_infaq]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>