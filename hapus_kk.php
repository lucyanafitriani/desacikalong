<?php
include("koneksi.php");
mysql_query("delete from data_kk where no_pengajuan='$no_pengajuan'");
?>
<script>
alert ("data terhapus");
window.location="index.php?hal=kk";
</script>