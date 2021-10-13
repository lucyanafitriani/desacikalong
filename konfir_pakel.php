<?php
include ("koneksi.php");
mysql_query("update pengantar_akel set status='setujui' where no_regis_lahir='$no_regis_lahir'");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=pakel";
</script>