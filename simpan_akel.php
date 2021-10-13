<?php
session_start ();
$un=$_SESSION['ses_un_admin'];
?>
<?php
include("koneksi.php");
$pengantar_rt=$_FILES['pengantar_rt']['name'];
$pengantar_rw=$_FILES['pengantar_rw']['name'];
mysql_query("insert into akta_kelahiran values ('$no_lahir','$status','$un',now(),'$hari','$pukul','$tgl_lahir','$tmpt_lahir','$tel_lah_anak','$bernama','$nm_ibu','$nik_ibu','$umur_ibu','$pekerjaan','$alamat_ibu','$nama_ayah','$nik_ayah','$umur_ayah','$pekerjaan_ayah','$Alamat_ayah','$nm_pelapor','$nik_pel','$umur_pel','$pekerjaan_pel','$alamat_pel','$hub_pel_bayi','$pengajuan','$pengantar_rt','$pengantar_rw')") or die(mysql_error());
copy($_FILES['pengantar_rt']['tmp_name'],"pengantar/".$_FILES['pengantar_rt']['name']);
copy($_FILES['pengantar_rw']['tmp_name'],"pengantar/".$_FILES['pengantar_rw']['name']);
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=akel";
</script>