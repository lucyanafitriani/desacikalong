<?php
session_start ();
$un=$_SESSION['ses_un_admin'];
include("koneksi.php");
$pengantar_aka=$_FILES['pengantar_akel']['name'];
$pengantar_rw=$_FILES['pengantar_rw']['name'];
mysql_query("insert into pengantar_akel values ('$no_regis_lahir','$un','belum konfirmasi','sudah konfirmasi','$nm_terlapor','$tempat_lahir','$tanggal_lahir','$nm_ayah_kan','$nm_ibu_kan','$nm_pel','$hub_pel')");
copy($_FILES['pengantar_akel']['tmp_name'],"pengantar/".$_FILES['pengantar_akel']['name']);
copy($_FILES['pengantar_rw']['tmp_name'],"pengantar/".$_FILES['pengantar_rw']['name']);
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=pakel";
</script>