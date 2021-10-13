<?php
include("koneksi.php");
mysql_query("delete from tabel_ktp where no_ktp='$no_ktp'");
?>
<script>
alert ("data terhapus");
window.location="index.php?hal=ktp";
</script>