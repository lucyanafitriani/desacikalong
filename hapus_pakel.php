<?php
include("koneksi.php");
mysql_query("delete from pengantar_akel where no_regis_lahir='$no_regis_lahir'");
?>
<script>
alert ("data terhapus");
window.location="index.php?hal=pakel";
</script>