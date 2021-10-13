<?php
include("koneksi.php");
mysql_query("delete from pengantar_pak where no_regis_mati='$no_regis_mati'");
?>
<script>
alert ("data terhapus");
window.location="index.php?hal=pak";
</script>