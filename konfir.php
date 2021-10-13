<?php
include ("koneksi.php");
mysql_query("update pengantar_rt set status='setujui' where no_regis='$no_regis'");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=rt";
</script>