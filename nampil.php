<?php
include 'daftar.php';
$sql = mysqli_query($con, "SELECT * FROM data");
?>
<form action=" " method="POST">
	<table border="1" cellpadding="7" cellspacing="5">
		<tr>
			<td>no</td>
			<td>nama</td>
			<td>nim</td>
		</tr>
		<?php
		if(mysqli_num_rows($sql)>0){
			$no=1;
			while ($data = mysqli_fetch_array($sql)){

		?>
		<table border="1" cellpadding="7" cellspacing="5">
		<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['nim']; ?></td>
		<td><a href='hapus.php'>Delete</a>
	</tr>
		<?php $no++; } ?>
	<?php } ?>
</table>

	</form>

<?php
if(isset($_POST['input'])){
	$nama = $_POST['nama'];
	$nim = $data['nim'];
	$sql = mysqli_query($con, "SELECT nama,nim,jenis,prodi,fakultas,asal,moto FROM data");

}


	$no=1;
	while($data=mysqli_fetch_array($sql)){
?>
<center>
	<table>
	<tr>
		<td>nama</td>
		<td>nim</td>
		
	</tr>
	<tr>
		<td><?php echo $_POST['nama']; ?></td>
		<td><?php echo $_POST['nim']; ?></td>
		
	</tr>
</table>
</center>

<?php  ?>
<?php } ?>
