<?php
include ("koneksi.php");
mysql_query("update pengantar_rw set pengajuan where no_regis='$no_regis'");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=rw";
</script>