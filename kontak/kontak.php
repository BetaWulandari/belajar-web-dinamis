<html>
<head>
</head>
<body align="center">
   
		<br><h1 align="center" size="100px">KONTAK</h1><br><br>
		<table border="1" align="center">
		<?php 

			include 'mysqlconnect.php';

			$sql = "SELECT src,username_kontak FROM kontak";
			$result = mysqli_query($mysqli, $sql);

			while ($r=mysqli_fetch_array($result)) {

		?>
				<!-- html -->

				<tr>
					<td>
						<img src=<?php echo $r['src'];  ?> width=60 height=60>
					</td>
					<td><?php echo $r['username_kontak']; ?></td>
				</tr>
		<?php
			}
		?>
		</table>

</body>
</html>