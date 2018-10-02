<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<form action="prosesregris.php" method="POST">
	<center>
		<table>
			<tr>
				<td>NIM</td>
				<td>: <input type="number" name="nim" maxlength="10" minlength="10"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>: <input type="text" name="nama" maxlength="25" minlength="25"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>: <input type="email" name="email"></td>
			</tr>
			<tr>
				<td><input type="submit" name="input" value="Input"></td>
			</tr>
		</table>
	</center>
	</form>
</body>
</html>