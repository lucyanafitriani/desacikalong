<?php
include ("koneksi.php");
mysql_query("delete from data_kk where no_pengajuan='$no_pengajuan'");
mysql_query("insert into data_kk values ('$no_pengajuan','$status','$id_admin','$pengajuan','$provinsi',$kabupaten_kota','$kecamatan','$kelurahan_desa','$nama_pem','$nm_kep','$alamat','$rt','$rw','$nm_lengkap','$nik','$tempat_lahir,'$tanggal_lahir','$jenis_kelamin','$kewarganegaraan','$gol_darah','$agama','$status_perkawinan','$pendidikan','$pekerjaan','$hub_kep','$nm_ayah','$nm_ibu','$pengantar_rt','$pengantar_rw')");?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=kk";
</script>