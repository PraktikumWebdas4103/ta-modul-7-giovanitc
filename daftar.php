<form action=" " method="POST">
	<center>
	<h1> Input Data Mahasiswa </h1>
		<table>
		<tr>
			<td> Nama 
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td> NIM 
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td> Jenis Kelamin
			<td><input type="radio" name="jenis" value="Laki-Laki">Laki-Laki<br>
			<td><input type="radio" name="jenis" value="Perempuan">Perempuan<br>
		</td>
		<tr>
			<td> Program Studi
				<td><select name="prodi">
				<option value="mi"> Manajemen Informatika </option>
				<option value="mp"> Manajemen Pemasaran </option>
				<option value="tt"> Teknik Telekomunikasi </option>
				<option value="mulmed"> Sistem Multimedia </option>
				<option value="dkv"> Desain Komunikasi Visual </option>
				<option value="di"> Desain Interior </option>
				<option value="ak"> Akuntansi </option>
		<tr>
			<td> Fakultas 
				<td><select name="fakultas">
				<option value="FIT"> FIT </option>
				<option value="FIk"> FIK </option>
				<option value="FKB"> FKB </option>
				<option value="FEB"> FEB </option>
				<option value="FRI"> FRI </option>
				<option value="FTE"> FTE </option>
			</select>
		</td>
		</tr>
		<tr>
			<td> Asal 
			<td><input type="textarea" name="asal"></td>
		</tr>
		<tr>
			<td> Motto hidup 
			<td><input type="textarea" name="moto"></td>
		</tr>
		<tr>
			<td>
			<input type="submit" name="input" value="input">
			</td>
		</tr>
		</table>
	</center>
</form>
<?php

	$servername = "localhost";
	$nama = "root";
	$nim = "";
	$db = "input";
	$con = new mysqli($servername, $nama, $nim, $db);

	if($con==false){
		die("koneksi gagal". $con->connect_error);
	}

	if(isset($_POST['input'])){
	$nama = $_POST ['nama'];
	$nim = $_POST ['nim'];
	$jenis = $_POST ['jenis'];
	$prodi = $_POST ['prodi'];
	$fakultas = $_POST ['fakultas'];
	$asal = $_POST ['asal'];
	$moto = $_POST ['moto'];

	$sql = mysqli_query($con, "SELECT * FROM data");
	$sql = "INSERT INTO data (nama,nim,jenis,prodi,fakultas,asal,moto) values ('$nama','$nim','$jenis','$prodi','$fakultas','$asal','$moto')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
	header('location: nampil.php');
}
?>