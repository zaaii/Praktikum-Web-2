<!DOCTYPE html>
<html>
<head>
	<title>Prak201 - Mengurutkan Nama dari yang terkecil</title>
</head>
<body>
<form method="POST">
	Nama : 1 <input type="text" name="nama1"></br>
	Nama : 2 <input type="text" name="nama2"></br>
	Nama : 3 <input type="text" name="nama3"></br>
	<input type="submit" name="submit" value="Urutkan">
</form></br>
<?php 
	if (isset($_POST['submit'])) {
		$nama1 = $_POST['nama1'];
		$nama2 = $_POST['nama2'];
		$nama3 = $_POST['nama3'];

		if ($nama1 < $nama2 && $nama1 < $nama3) {
			if ($nama2 < $nama3) {
				echo "$nama1 <br> $nama2 <br> $nama3";
			} else {
				echo "$nama1 <br> $nama3 <br> $nama2";
			}
		} elseif ($nama2 < $nama1 && $nama2 < $nama3) {
			if ($nama1 < $nama3) {
				echo "$nama2 <br> $nama1 <br> $nama3";
			} else {
				echo "$nama2 <br> $nama3 <br> $nama1";
			}
		} else {
			if ($nama1 < $nama2) {
				echo "$nama3 <br> $nama1 <br> $nama2";
			} else {
				echo "$nama3 <br> $nama2 <br> $nama1";
			}
		}
	}
 ?>
</body>
</html>