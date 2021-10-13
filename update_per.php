<?php
include("koneksi.php");
mysql_query("delete from akta_pernikahan where no_surat='$no_surat'");
mysql_query("insert into akta_pernikahan values ('$nik','$no_surat','$tgl_surat','$tgl_nikah')");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=aper";
</script>
