<?php
include ("koneksi.php");
mysql_query("delete from tabel_ktp where no_ktp='$no_ktp'");
mysql_query("insert into tabel_ktp values ('$no_ktp','$nik','$nama_lengkap','$jenis_kelamin','$gol_darah','$tempat_lahir','$tanggal_lahir','$provinsi','$pendidikan','$status_kawin','$agama','$pekerjaan','$alamat','$rt','$rw','$kode_pos','$kel_desa','$kecamatan','$kewarganegaraan','$nama_ayah','$nama_ibu','$fc_sc_kk')");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=ktp";
</script>