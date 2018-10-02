<!DOCTYPE html>
	<html>
	<head>
		<title>Registrasi</title>
	</head>
	<body style="font-family: kristen itc regular">
		<h1>Registrasi</h1>
		<form action="" method="POST">
			<table>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="number" name="nim"></td>
				</tr>
				<tr>
					<td>NAMA</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>EMAIL</td>
					<td>:</td>
					<td><input type="email" name="email" value="@gmail.com"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
			
		</form>
	
	</body>
	</html>

<?php
	$servername = "localhost";
	$username ="root";
	$password = "";
	$db = "jurnal5";
	$con = mysqli_connect($servername,$username,$password,$db);

	if($con==false){
			die("Connection Failed: ");
	}

	if (isset($_POST['submit'])){
			$nim= $_POST['nim'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			if (strlen($nim) == 10) {
				echo "NIM harus 10 pas!!!";
			}
			$sql ="INSERT INTO jurnal5 (NIM,Nama,Email) values ('$nim','$nama','$email')";
			$result=mysqli_query($con,$sql);
			if ($result){
				echo "Database sudah di input";
			}	else{
					echo "ERROR BOS";
				}
	}
?>