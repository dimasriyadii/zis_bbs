<thead>
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
					$no = 0;
						$queryzakat = mysqli_query ($connect, "SELECT id_zakatf, tanggal, nama, alamat, uang, beras 
						FROM zakat_fitrah");
						if($queryzakat == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($user = mysqli_fetch_array ($queryzakat)){
							$no++;
							
							echo "
								<tr>
									<td>$no</td>
									<td>$user[tanggal]</td>
									<td>$user[nama]</td>
									<td>$user[alamat]</td>
									<td>$user[uang]</td>
									<td>$user[beras]</td>
									<td>
										<a href='#' class='open_modal btn btn-primary' id_zakatf='$user[id_zakatf]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"zakats_delete.php?id_zakatf=$user[id_zakatf]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>