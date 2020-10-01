<?php
// koneksi database
include_once 'koneksi.php';
?>


<center>
	<h1>USER LIST</h1>
	<table>
		<tr>
			<th>No.</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
		</tr>
		<?php
		$query = "select * from user";
		$result = $con->prepare($query);
		$result->execute();
		
		$i = 1;
		while($row = $result->fetch()){
		?>
		<tr>
			<td><?=$i?></td>
			<td><?=$row['username']?></td>
			<td><?=$row['password']?></td>
			<td><?=$row['email']?></td>
		</tr>
		
		<?php
		$i++;
		}
		?>
	</table>
