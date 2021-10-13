<?php
include ("koneksi.php");
mysql_query("delete from pengantar_aka where no_regis_mati='$no_regis_mati'");
mysql_query("insert into pengantar_aka values ('$no_regis_mati','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$hari','$tanggal','$pukul','$tempat','$penyebab')");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=pak";
</script>