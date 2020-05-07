<thead>

				
				<tbody>
				<?php
					$queryinfo = mysqli_query($connect,"SELECT SUM(uang) AS jumlah FROM zakat_fitrah");
					$queryberas = mysqli_query($connect,"SELECT SUM(beras) AS beras FROM zakat_fitrah");
					$data1 = mysqli_fetch_array($queryinfo);
					$data2 = mysqli_fetch_array($queryberas);
					echo $data1['jumlah'] + $data['jumlah'];
					?>
					<tr>
						<th>Jenis</th>
						<th>Uang</th>
						<th>Beras</th>
					</tr>
					<?php
								echo "
								<tr>
									<td>Zakat</td>
									<td>$data1[jumlah]</td>
									<td>$data2[beras]</td>
									<td>
										<a href='#' class='open_modal btn btn-primary' id_zakatf='$data[id_zakatf]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"zakats_delete.php?id_zakatf=$zakat[id_zakatf]\")'>Delete</a>
										<a href='cetak.php?id_zakatf=$zakat[id_zakatf]' target=_blank  class='btn btn-success'>Print</a>
									</td>
								</tr>";
					?>
				</tbody>
</thead>

				<!-- <a href='cetak.php' class='btn btn-success' id_zakatf='$zakat[id_zakatf]'>Print</a> -->


	