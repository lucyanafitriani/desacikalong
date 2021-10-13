<?php
include ("koneksi.php");
mysql_query("delete from akta_kelahiran where no_lahir='$no_lahir'");
mysql_query("insert into akta_kelahiran values ('$no_lahir','$hari','$pukul','$tgl_lahir','$tmpt_lahir','$tel_lah_anak','$bernama','$dr_seor_ibu','$nm_ibu','$nik_ibu','$umur_ibu','$pekerjaan','$alamat_ibu','$nama_ayah','$nik_ayah','$umur_ayah','$pekerjaan_ayah','$Alamat_ayah','$nm_pelapor','$nik_pel','$umur_pel','$pekerjaan_pel','$alamat_pel','$hub_pel_bayi','$pengantar_rt','$pengantar_rw')");
?>
<script>
alert("Data Tersimpan");
window.location="index.php?hal=akel";
</script>