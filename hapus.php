<?php
include 'nampil.php';

	if(!empty($nama)&&$nama!=""){

$query="DELETE from data where nama='$nama'";
$sql=mysqli_query($query);
if($sql){
?>
<script type="text/javascript">
	alert('data mahasiswa <?=$nama?>Berhasil dihapus');
	document location = 'nampil.php';
</script>

?>
<?php } ?>
<?php } ?>