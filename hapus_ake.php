<?php
include("koneksi.php");
mysql_query("delete from akta_kematian where no_mati='$no_mati'");
?>
<script>
alert ("data terhapus");
window.location="index.php?hal=aka";
</script>