<thead>

				
				<tbody>
				<?php
					$queryjumlah = mysqli_query($connect,"SELECT SUM(jumlah) AS jumlah FROM infaq");
					$data1 = mysqli_fetch_array($queryjumlah);

					//tungitung

					?>
					<tr>
						<th>Jenis</th>
						<th>Uang</th>
					</tr>
					<?php
								echo "
								<tr>
									<td>Infaq</td>
									<td>$data1[jumlah]</td>
								</tr>";
					?>
				</tbody>
</thead>

				<!-- <a href='cetak.php' class='btn btn-success' id_zakatf='$zakat[id_zakatf]'>Print</a> -->


	