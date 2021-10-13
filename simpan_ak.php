<?php
include ("koneksi.php");
$pengantar_rt=$_FILES['pengantar_rt']['name'];
$pengantar_rw=$_FILES['pengantar_rw']['name'];
mysql_query("insert into akta_kematian values ('$no_mati','$status','$un',now(),'$nama_lengkap','$nik','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$umur','$agama','$alamat','$hari','$tgl_meninggal','$tem_meninggal','$peny_kematian','$nm_pelapor','$tmp_lah_pel','$tgl_lah_pel','$umur_pel','$pekerjaan_pel','$alamat_pel','$hub_pelapor','$pengantar_rt','$pengantar_rw','$pengajuan')");
copy($_FILES['pengantar_rt']['tmp_name'],"pengantar/".$_FILES['pengantar_rt']['name']);
copy($_FILES['pengantar_rw']['tmp_name'],"pengantar/".$_FILES['pengantar_rw']['name']);
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=aka";
</script>
