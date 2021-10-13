<?php
include("koneksi.php");
mysql_query("delete from tabel_ktp where no_kk='$no_kk'");
?>
<script>
alert ("data terhapus");
window.location="index.php?hal=rt";
</script>