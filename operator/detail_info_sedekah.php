


<thead>
      <tr>
        <th>Jenis</th>
        <th>Uang</th>

      </tr>
</thead>
    <tbody>
	<?php
					$queryjumlah = mysqli_query($connect,"SELECT SUM(jumlah) AS jumlah FROM sedekah");
					$data1 = mysqli_fetch_array($queryjumlah);

					//tungitung
					?>
					<?php
								echo "
								<tr>
								<td>Sedekah</td>
								<td>$data1[jumlah]</td>
									
								</tr>";
					?>
</tbody>