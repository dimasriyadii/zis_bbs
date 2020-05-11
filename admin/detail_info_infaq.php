<thead>
      <tr>
        <th>Jenis</th>
        <th>Uang</th>

      </tr>
</thead>
    <tbody>
	<?php
					$queryjumlah = mysqli_query($connect,"SELECT SUM(jumlah) AS jumlah FROM infaq");
					$data1 = mysqli_fetch_array($queryjumlah);
					?>
					<?php
								echo "
								<tr>
									<td>Infaq</td>
									<td>$data1[jumlah]</td>
									
								</tr>";
					?>
</tbody>