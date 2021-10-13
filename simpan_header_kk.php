<?php
include("koneksi.php");
$tb=date("ym");
$cek=mysql_query("select * from header_kk order by no_pengajuan desc");
$isi=mysql_num_rows($cek);
$data=mysql_fetch_array($cek);

if($isi==0) {
$no_pengajuan="p".$tb."0001";
}else{
$a=substr($data['no_pengajuan'],5,4)+10001;
$no_pengajuan="p".$tb.substr($a,1,4);

}
mysql_query("insert into header_kk values ('$no_pengajuan','$nm_pem','$nm_kep','$alamat','$rt','$rw','$kode_pos','$desa_kelurahan','$kecamatan','$kabupaten_kota','$provinsi')") or die(mysql_error());

?>
<script>
idp="<?php echo $no_pengajuan ?>";
alert("Data Tersimpan");
window.location="index.php?hal=det_kk&nidp="+idp ;
</script>