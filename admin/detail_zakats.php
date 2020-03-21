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
						while ($zakat = mysqli_fetch_array ($queryzakat)){
							$no++;
							
							echo "
								<tr>
									<td>$no</td>
									<td>$zakat[tanggal]</td>
									<td>$zakat[nama]</td>
									<td>$zakat[alamat]</td>
									<td>$zakat[uang]</td>
									<td>$zakat[beras]</td>

									<td>
										<a href='#' class='open_modal btn btn-primary' id_zakatf='$zakat[id_zakatf]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"zakats_delete.php?id_zakatf=$zakat[id_zakatf]\")'>Delete</a>
										<a href='cetak.php' class='btn btn-success' id_zakatf='$zakat[id_zakatf]'>Print</a>
										<a href='cetak.php?page=detail&id_zakatf=$zakat[id_zakatf]' class='btn btn-info'>Printtt</a>
									</td>
								</tr>";
						}
					?>
				</tbody>