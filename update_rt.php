<?php
include ("koneksi.php");
mysql_query("delete from pengantar_rt where no_regis='$no_regis'");
mysql_query("insert into pengantar_rt values ('$no_regis','$nama','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$pekerjaan','$agama','$status_perkawinan','$kewarganegaraan','$alamat')");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=rt";
</script>