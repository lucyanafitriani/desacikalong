<?php
include ("koneksi.php");
mysql_query("delete from pengantar_akel where no_regis_lahir='$no_regis_lahir'");
mysql_query("insert into pengantar_akel values ('$no_regis_lahir','$un','$nm_terlapor','$tempat_lahir','$tanggal_lahir','$nm_ayah_kan','$nm_ibu_kan','$nm_pel','$hub_pel')");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=pakel";
</script>