<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
	$simpan=mysqli_query($kon,"insert into gejala values ('', '$_POST[kd_gejala]','$_POST[nm_gejala]','$_POST[question]','$_POST[b1]','$_POST[b2]','$_POST[b3]','$_POST[b4]','$_POST[b5]','$_POST[b6]','$_POST[b7]','$_POST[b8]','$_POST[b9]')");
	
	if($simpan){
	echo"<script>
		alert('Input Gejala Berhasil');
		window.location.href='index.php?p=gejala';
	</script>";
	}else{
	echo"<script>
		alert('Input Gejala Gagal');
		window.location.href='index.php?p=gejala';
		</script>";
	}
}
?>
<br>
<br>
<h2>Data Gejala</h2>
<form action='' method="post">
<table>


	<tr>
    	<td>Kode Gejala</td>
        <td><input name="kd_gejala" type="text"/></td>
     </tr>
    <tr><td>Nama Gejala</td><td><input name="nm_gejala" type="text"/></td></tr>
    <tr><td>Pertanyaan Gejala</td><td><input name="question" type="text"/></td></tr>
    <tr><td>Bobot Gejala Intoksikasi</td><td><input name="b1" type="text"/></td></tr>
    <tr><td>Bobot Gejala Helminthiasis</td><td><input name="b2" type="text"/></td></tr>
    <tr><td>Bobot Gejala Gastritis</td><td><input name="b3" type="text"/></td></tr>
    <tr><td>Bobot Gejala Enteritis</td><td><input name="b4" type="text"/></td></tr>
    <tr><td>Bobot Gejala Panleukopenia</td><td><input name="b5" type="text"/></td></tr>
    <tr><td>Bobot Gejala Calici</td><td><input name="b6" type="text"/></td></tr>
	<tr><td>Bobot Gejala Konstipasi</td><td><input name="b7" type="text"/></td></tr>
    <tr><td>Bobot Gejala Megacolon</td><td><input name="b8" type="text"/></td></tr>
    <tr><td>Bobot Gejala Prolaps Recti-Ani</td><td><input name="b9" type="text"/></td></tr>
    <tr><td></td><td><input name="simpan" type="submit" value="Simpan"/></td></tr>
</table>
</form>
    