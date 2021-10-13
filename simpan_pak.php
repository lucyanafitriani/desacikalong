<?php
session_start ();
$un=$_SESSION['ses_un_admin'];
include("koneksi.php");
$pengantar_aka=$_FILES['pengantar_aka']['name'];
$pengantar_rw=$_FILES['pengantar_rw']['name'];
mysql_query("insert into pengantar_aka values ('$no_regis_mati','$un','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$hari','$tanggal','$pukul','$tempat','$penyebab')");
copy($_FILES['pengantar_aka']['tmp_name'],"pengantar/".$_FILES['pengantar_aka']['name']);
copy($_FILES['pengantar_rw']['tmp_name'],"pengantar/".$_FILES['pengantar_rw']['name']);
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=pak";
</script>