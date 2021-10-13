<?php
include ("koneksi.php");
mysql_query("update akta_kelahiran set status='tolak' where no_lahir='$no_lahir'");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=akel";
</script>