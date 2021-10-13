<?php
include("koneksi.php");
$fc_sc_kk=$_FILES['fc_sc_kk']['name'];
mysql_query("insert into tabel_ktp values ('$no_ktp','$status','$un','$nik','$nama_lengkap','$jenis_kelamin','$gol_darah','$tempat_lahir','$tanggal_lahir','$provinsi','$pendidikan','$status_kawin','$agama','$pekerjaan','$alamat','$rt','$rw','$kode_pos','$kel_desa','$kecamatan','$kewarganegaraan','$nama_ayah','$nama_ibu','$fc_sc_kk','$pengajuan')");
copy($_FILES['fc_sc_kk']['tmp_name'],"pengantar/".$_FILES['fc_sc_kk']['name']);
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=ktp";
</script>