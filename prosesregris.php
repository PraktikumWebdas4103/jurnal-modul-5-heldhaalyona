<?php
include 'koneksi.php';

 	if(isset($_POST['input'])){
	$nim 	= $_POST['nim'];
	$nama 	= $_POST['nama'];
	$email	= $_POST['email'];

	$sql = "INSERT INTO mahasiswa (nim,nama,email) values ('$nim','$nama','$email')";
	if (mysqli_query($connect, $sql)){
		echo "Database sudah masuk";
	}else{
		echo "ERROR";
	}
	}
?>