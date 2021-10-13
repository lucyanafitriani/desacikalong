<?php
include("koneksi.php");
mysql_query("delete from data_penduduk where nik='$nik'");
?>
<script>
alert ("data terhapus");
window.location="index.php?hal=penduduk";
</script>