<?php
session_start ();
if(!session_is_registered("ses_un_admin")){
?>
<script>
alert("Anda Belum Login !!");
window.location="login.php";
</script>
<?php

}
?><head>
<title> Desa Cikalong </title>
<link rel="icon" href="img/krw.jpg">
<link rel="stylesheet" href="main.css">
</head>

<div id="conta">
<div id="header"></div>
<div id="menu">
<ul >
<?php
if($_SESSION['ses_un_ha']=='rt'){
?>
<li><a href="?hal=home">Home</a>  </li>
<li><a href="?hal=aka">Pengantar Kematian</a></li>
<li><a href="?hal=akel">Pengantar Kelahiran</a></li>
<li><a href="?hal=ktp">Pengantar KTP</a></li>
<li><a href="?hal=kk">Pengantar KK</a></li>
<li><a href="logout.php">Logout</a></li>
<?php
} else if($_SESSION['ses_un_ha']=='rw'){
?>
<li><a href="?hal=home">Home</a>  </li>
<li><a href="?hal=aka">Pengantar Kematian</a></li>
<li><a href="?hal=akel">Pengantar Kelahiran</a></li>
<li><a href="?hal=ktp">Pengantar KTP</a></li>
<li><a href="?hal=kk">Pengantar KK</a></li>
<li><a href="logout.php">Logout</a></li>

<?php
} else{
?>
<li><a href="?hal=home">Home</a></li>
<li><a href="?hal=penduduk">Penduduk</a></li>
<li><a href="?hal=aka">Kematian</a>  </li>
<li><a href="?hal=akel">Kelahiran</a></li>  
<li><a href="?hal=ktp">KTP</a></li>
<li><a href="?hal=kk">KK</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="?hal=laporan">Laporan</a></li>
<?php
}
?>
</ul>
</div>
<div id="main"> 
<?php include("hal.php"); ?>

</div>

<div id="footer"></div>
</div>