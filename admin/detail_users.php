<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Level</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 0;
						$queryusers = mysqli_query ($connect, "SELECT id_users, nama, username, password, level	FROM user");
						if($queryusers == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($users = mysqli_fetch_array ($queryusers)){
							$no++;
							
							echo "
								<tr>
									<td>$no</td>
									<td>$users[nama]</td>
									<td>$users[username]</td>
									<td>$users[level]</td>

									<td>
										<a href='#' class='open_modal btn btn-primary' id_users='$users[id_users]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"user_delete.php?id_users=$users[id_users]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>