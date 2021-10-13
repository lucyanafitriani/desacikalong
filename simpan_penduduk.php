<?php
include("koneksi.php");
mysql_query("insert into data_penduduk values ('$nama','$nik','$tgl_lahir','$status','$pekerjaan','$jk','$alamat','$agama','$nama_ibu','$nama_ayah','$gdr','$tem_lahir')");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=penduduk";
</script>