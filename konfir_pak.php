<?php
include ("koneksi.php");
mysql_query("update pengantar_aka set pengajuan where no_regis_mati='$no_regis_mati'");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=pak";
</script>