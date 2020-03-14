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
						$querysedekah = mysqli_query ($connect, "SELECT id_sedekah, tanggal, nama, alamat, jumlah FROM sedekah");
						if($querysedekah == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($sedekah = mysqli_fetch_array ($querysedekah)){
							$no++;
							
							echo "
								<tr>
									<td>$no</td>
									<td>$sedekah[tanggal]</td>
									<td>$sedekah[nama]</td>
									<td>$sedekah[alamat]</td>
									<td>$sedekah[jumlah]</td>

									<td>
										<a href='#' class='open_modal btn btn-primary' id_sedekah='$sedekah[id_sedekah]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"sedekah_delete.php?id_sedekah=$sedekah[id_sedekah]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>