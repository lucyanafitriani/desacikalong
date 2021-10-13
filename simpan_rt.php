<?php
session_start ();
$un=$_SESSION['ses_un_admin'];
include("koneksi.php");
$pengantar_rt=$_FILES['pengantar_rt']['name'];
$pengantar_rw=$_FILES['pengantar_rw']['name'];
mysql_query("insert into pengantar_rt values ('$no_regis','$un','belum konfirmasi','sudah konfirmasi','$nama','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$pekerjaan','$agama','$status_perkawinan','$kewarganegaraan','$alamat')");
copy($_FILES['pengantar_rt']['tmp_name'],"pengantar/".$_FILES['pengantar_rt']['name']);
copy($_FILES['pengantar_rw']['tmp_name'],"pengantar/".$_FILES['pengantar_rw']['name']);
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=rt";
</script>