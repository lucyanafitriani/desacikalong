<?php
session_start ();
include("koneksi.php");
$cek=mysql_query("select * from tabel_admin where id_admin='$id_admin' and password='$password'");
$isi=mysql_num_rows($cek);
echo $isi;
$data=mysql_fetch_array($cek);
if($isi=="1"){
$_SESSION['ses_un_admin']=$id_admin;
$_SESSION['ses_un_ha']=$data['hak_akses'];
?>
<script>
alert("login berhasil");
window.location="index.php?hal=";
</script>
<?php
} else {
?>
<script>
alert("login gagal");
window.location="login.php";
</script>
<?php
}
?>