<thead>

				
				<tbody>
				<?php
					$queryinfo = mysqli_query($connect,"SELECT SUM(uang) AS jumlah FROM zakat_fitrah");
					$queryberas = mysqli_query($connect,"SELECT SUM(beras) AS beras FROM zakat_fitrah");
					$querypenerima = mysqli_query($connect,"SELECT SUM(uang) AS uangp FROM tbl_penerima");
					$queryberasp = mysqli_query($connect,"SELECT SUM(beras) AS berasp FROM tbl_penerima");
					$data1 = mysqli_fetch_array($queryinfo);
					$data2 = mysqli_fetch_array($queryberas);
					$data3 = mysqli_fetch_array($querypenerima);
					$data4 = mysqli_fetch_array($queryberasp);

					//tungitung
					$hasil_uang = $data1['jumlah'] - $data3['uangp'];
					$hasil_beras = $data2['beras'] - $data4['berasp'];
					?>
					<tr>
						<th>Jenis</th>
						<th>Uang</th>
						<th>Beras</th>
					</tr>
					<?php
								echo "
								<tr>
									<td>Zakat Fitrah</td>
									<td>$hasil_uang</td>
									<td>$hasil_beras</td>
								</tr>";
					?>
				</tbody>
</thead>

				<!-- <a href='cetak.php' class='btn btn-success' id_zakatf='$zakat[id_zakatf]'>Print</a> -->


	