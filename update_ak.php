<?php
include ("koneksi.php");
mysql_query("delete from akta_kematian where no_mati='$no_mati'");
mysql_query("insert into akta_kematian values ('$no_mati','$nama_lengkap','$nik','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$umur','$agama','$alamat','$hari','$tgl_meninggal','$tem_meninggal','$peny_kematian','$nm_pelapor','$tmp_lah_pel','$tgl_lah_pel','$umur_pel','$pekerjaan_pel','$alamat_pel','$hub_pelapor','$pengantar_rt','$pengantar_rw')");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=aka";
</script>