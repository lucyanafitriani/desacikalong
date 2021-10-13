<?php
include ("koneksi.php");
mysql_query("delete from akta_pernikahan where no_surat='$no_surat'");
?>
<script>
alert("data terhapus");
window.location="index.php?hal=aper";
</script>