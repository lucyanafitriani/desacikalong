<?php
include ("koneksi.php");
mysql_query("update tabel_ktp set status='tolak' where no_ktp='$no_ktp'");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=ktp";
</script>