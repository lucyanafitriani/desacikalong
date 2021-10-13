<?php
include("koneksi.php");
mysql_query("delete from pengantar_rw where no_regis='$no_regis'");
?>
<script>
alert ("data terhapus");
window.location="index.php?hal=rw";
</script>