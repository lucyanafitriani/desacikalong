<?php
include ("koneksi.php");
mysql_query("update data_kk set status='setujui' where no_pengajuan='$no_pengajuan'");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=kk";
</script>