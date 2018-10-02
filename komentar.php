<form action="" method="POST">
	<tr>
		<td>MASUKKAN KOMENTAR </td>
		<td>: <input type="text" name="komentar" style="width: 20%; height: 10%; border-radius: 10px; border-color: green"></td>
	</tr>
	<br>
	<br>
	<tr>
		<td></td>
		<td><input type="submit" name="input" value="Input" style="width: 5%; height: 3%; border-radius: 5px; border-color: red"></td>
	</tr>

</form>
<?php
	if (isset($_POST['input'])) {
		$komen 	= $_POST['komentar'];

		$hasil = str_word_count($komen);

		if ($hasil < 5) {
			echo "ERROR";
		}else{
			echo "Jumlah Kata :" .$hasil;
		}
		
	}
?>