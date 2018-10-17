<form action=" " method="POST">
	<center>
	<table>
	<tr>
		<nav>
	<td><a href="daftar.php"> Input data mahasiswa</a> <br><br></td></tr>
	<tr>
	<td><input type="text" name="cari"></td>
	<tr>
	<td><a href="search.php">Search</a>
	</td>
</tr>
</nav>
</center>
<?php
if(isset($_POST['input'])){
	$nim = $_POST['nim'];
	$query = mysqli_query($con,"SELECT * FROM data");
	$no=1;
	print_r($data['nim']);
	print_r($data['nama']);
	$no++;

	echo "<table>
	echo Data mahasiswa
	<tr>
	<th> Nama </th>
	<th> Nim </th>
	<th> aksi </th>
	</tr>
	<tr>
	foreach ($query as $data){

	}
	</tr>";
}
?>