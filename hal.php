<?php
switch ($hal){	
	case "editpen":
	include("editpen.php");
	break;
	case "editak":
	include("editak.php");
	break;
	case "editakel":
	include("editakel.php");
	break;
	case "edit_ktp":
	include ("edit_ktp.php");
	break;	
	case "edit_kk":
	include ("edit_kk.php");
	break;
	case "edit_pak":
	include ("edit_pak.php");
	case "edit_pakel":
	include ("edit_pakel.php");
	break;
	break;
	case "edit_rt":
	include ("edit_rt.php");
	break;
	case "edit_rw":
	include ("edit_rw.php");
case "home":
include("home.php");
break;
case "penduduk":
include("penduduk.php");
break;
case "aka":
include("a_kematian.php");
break;
case "akel":
include("a_kelahiran.php");
break;
case "ktp":
include ("ktp.php");
break;
case "kk":
include ("data_kk.php");
break;
case "pak":
include ("pengantar_aka.php");
break;
case "pakel":
include ("pengantar_akel.php");
break;
case "rt":
include ("pengantar_rt.php");
break;
case "rw":
include ("pengantar_rw.php");
break;
case "laporan":
include ("laporan.php");
break;
default:
include("home.php");
break;
}
?>
