<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
	$simpan=mysqli_query($kon,"update gejala set nm_gejala='$_POST[nm_gejala]', question='$_POST[question]' , b1='$_POST[b1]', b2='$_POST[b2]', b3='$_POST[b3]', b4='$_POST[b4]', b5='$_POST[b5]', b6='$_POST[b6], b7='$_POST[b7]', b8='$_POST[b8]', b9='$_POST[b9]', b10='$_POST[b10]', b11='$_POST[b11]' where kd_gejala='$_POST[kd_gejala]'");
	 
	if($simpan){
	echo"<script>
		
		window.location.href='index.php?p=gejala';
	</script>";
	}else{
	echo"<script>
		
		</script>";
	}
}

$qcari=mysqli_query($kon,"select * from gejala where kd_gejala='$_GET[edit]'");
$cari=mysqli_fetch_array($qcari);
?>

<h2>Edit Data Gejala</h2>
<form action='' method="post">
<table>

	<tr><td>Kode Gejala</td><td><input name="kd_gejala" type="text" value="<?php echo"$cari[kd_gejala]"; ?>" readonly/></td></tr>
    <tr><td>Nama Gejala</td><td><input name="nm_gejala" type="text" value="<?php echo"$cari[nm_gejala]"; ?>"/></td></tr>
    <tr><td>Pertanyaan Gejala</td><td><input name="question" type="text" value="<?php echo"$cari[question]"; ?>"/></td></tr>
    <tr><td>Bobot Gejala Intoksikasi</td><td><input name="b1" type="text" value="<?php echo"$cari[b1]"; ?>"/></td></tr>
    <tr><td>Bobot Gejala Helminthiasis</td><td><input name="b2" type="text" value="<?php echo"$cari[b2]"; ?>"/></td></tr>
    <tr><td>Bobot Gejala Gastritis</td><td><input name="b3" type="text" value="<?php echo"$cari[b3]"; ?>"/></td></tr>
    <tr><td>Bobot Gejala Enteritis</td><td><input name="b4" type="text" value="<?php echo"$cari[b4]"; ?>"/></td></tr>
    <tr><td>Bobot Gejala Panleukopenia</td><td><input name="b5" type="text" value="<?php echo"$cari[b5]"; ?>"/></td></tr>
    <tr><td>Bobot Gejala Calici</td><td><input name="b6" type="text" value="<?php echo"$cari[b6]"; ?>"/></td></tr>
	<tr><td>Bobot Gejala Konstipasi</td><td><input name="b7" type="text" value="<?php echo"$cari[b7]"; ?>"/></td></tr>
    <tr><td>Bobot Gejala Megacolon</td><td><input name="b8" type="text" value="<?php echo"$cari[b8]"; ?>"/></td></tr>
    <tr><td>Bobot Gejala Prolaps Recti-Ani</td><td><input name="b9" type="text" value="<?php echo"$cari[b9]"; ?>"/></td></tr>
    <tr><td></td><td><input name="simpan" type="submit" value="Simpan"/></td></tr>
</table>
</form>
    