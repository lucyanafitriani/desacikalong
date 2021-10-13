<?php
include ("koneksi.php");
mysql_query("update akta_kematian set status='setujui' where no_mati='$no_mati'");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=aka";
</script>