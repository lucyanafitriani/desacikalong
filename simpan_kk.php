<?php
include("koneksi.php");
$pengantar_rt=$_FILES['pengantar_rt']['name'];
$pengantar_rw=$_FILES['pengantar_rw']['name'];
mysql_query("insert into data_kk values ('$no_pengajuan','$status','$un',now(),'$pengajuan','$provinsi','$kabupaten_kota','$kecamatan','$desa_kelurahan','$nm_pem','$nm_kep_kel','$alamat','$rt','$rw','$nm_lengkap',
'$nik','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$kewarganegaraan',
'$gol_darah','$agama','$status_perkawinan','$pendidikan','$pekerjaan',
'$hub_kep','$nm_ayah','$nm_ibu','$pengantar_rt','$pengantar_rw')");
copy($_FILES['pengantar_rt']['tmp_name'],"pengantar/".$_FILES['pengantar_rt']['name']);
copy($_FILES['pengantar_rw']['tmp_name'],"pengantar/".$_FILES['pengantar_rw']['name']);
?>
<script>
idp="<?php echo $no_pengajuan ?>";
alert("Data Tersimpammmn");
window.location="index.php?hal=det_kk&nidp="+idp ;
</script>