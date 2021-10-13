<?php
include("koneksi.php");
mysql_query("delete from akta_kelahiran where no_lahir='$no_lahir'");
?>
<script>
alert ("data terhapus");
window.location="index.php?hal=akel";
</script>