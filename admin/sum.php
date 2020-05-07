<?php
					$queryinfo = mysqli_query($connect,"SELECT SUM(uang) AS total_zakat FROM zakat_fitrah");
					$data = mysqli_fetch_array($queryinfo);
					
					echo $data['jumlah'];
					?>