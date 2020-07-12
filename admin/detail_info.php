
<thead>
      <tr>
        <th>Jenis</th>
        <th>Uang</th>
        <th>Beras</th>
      </tr>
</thead>
    <tbody>
	<?php
					$queryinfo = mysqli_query($connect,"SELECT SUM(uang) AS jumlah FROM zakat_fitrah");
					$queryberas = mysqli_query($connect,"SELECT SUM(beras) AS beras FROM zakat_fitrah");
					$querypenerima = mysqli_query($connect,"SELECT SUM(uang) AS uangp FROM tbl_penerima");
					$queryberasp = mysqli_query($connect,"SELECT SUM(beras) AS berasp FROM tbl_penerima");
					$data1 = mysqli_fetch_array($queryinfo);
					$data2 = mysqli_fetch_array($queryberas);
					// $data3 = mysqli_fetch_array($querypenerima);
					// $data4 = mysqli_fetch_array($queryberasp);

					//tungitung
					$hasil_uang = $data1['jumlah'] - $data3['uangp'];
					$hasil_beras = $data2['beras'] - $data4['berasp'];
					?>
					<?php
					$angka = $hasil_uang;
					$angka_format = number_format($angka,2,",",".");
					
								echo "
								<tr>
									<td>Zakat Fitrah</td>
									<td>Rp. $angka_format</td>
									<td>$hasil_beras Kilogram</td>
								</tr>";
					?>
</tbody>


<thead>
      <tr>
      </tr>
</thead>
    <tbody>
	<?php
					$queryjumlah = mysqli_query($connect,"SELECT SUM(jumlah) AS jumlah FROM infaq");
					$data1 = mysqli_fetch_array($queryjumlah);
					?>
					<?php
										$angka = $data1['jumlah'];
										$angka_format1 = number_format($angka,2,",",".");
								echo "
								<tr>
									<td>Infaq</td>
									<td>Rp. $angka_format1</td>
									<td>-</td>
									
								</tr>";
					?>
</tbody>




<thead>
      <tr>
      </tr>
</thead>
    <tbody>
	<?php
					$queryjumlah = mysqli_query($connect,"SELECT SUM(jumlah) AS jumlah FROM sedekah");
					$data2 = mysqli_fetch_array($queryjumlah);

					//tungitung
					?>
					<?php
								$angka = $data2['jumlah'];
								$angka_format2 = number_format($angka,2,",",".");
								echo "
								<tr>
								<td>Sedekah</td>
								<td>Rp. $angka_format2</td>
								<td>-</td>
								</tr>";
					?>
</tbody>

<thead>
      <tr>
      </tr>
</thead>
    <tbody>
	<?php
					$queryjumlah = mysqli_query($connect,"SELECT SUM(jumlah) AS jumlah FROM sedekah");
					$data2 = mysqli_fetch_array($queryjumlah);

					//tungitung
					?>
					<?php
								$angka = $data2['jumlah'];
								$angka_format2 = number_format($angka,2,",",".");
								echo "
								<tr>
								<td>Sedekah</td>
								<td>Rp. $angka_format2</td>
								<td>-</td>
								</tr>";
					?>
</tbody>

