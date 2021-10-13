<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("koneksi.php");
$cari=mysql_query("select * from pengantar_akel where no_regis_lahir='$no_regis_lahir'");
$data=mysql_fetch_array($cari);
?>
<form action="update_pakel.php" method="post">
<table width="100%" border="0">
  <tr>
    <td width="15%">No Regis Lahir</td>
    <td width="85%"><label for="no_regis_lahir"></label>
      <input value="<?php echo $data ['no_regis_lahir']?>" type="text" name="no_regis_lahir" id="no_regis_lahir" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>Nama Terlapor</td>
    <td><label for="nm_terlapor"></label>
      <input value="<?php echo $data ['nm_terlapor']?>" type="text" name="nm_terlapor" id="nm_terlapor" /></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><label for="tempat_lahir"></label>
      <input value="<?php echo $data ['tempat_lahir']?>" type="text" name="tempat_lahir" id="tempat_lahir" /></td>
   </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><label for="tanggal_lahir"></label>
      <input value="<?php echo $data ['tanggal_lahir']?>" type="date" name="tanggal_lahir" id="tanggal_lahir" /></td>
  </tr>
   <tr>
    <td>Nama Ayah Kandung</td>
    <td><label for="nm_ayah_kan"></label>
      <input value="<?php echo $data ['nm_ayah_kan']?>" type="text" name="nm_ayah_kan" id="nm_ayah_kan" /></td>
  </tr>
   <tr>
    <td>Nama Ibu Kandung</td>
    <td><label for="nm_ibu_kan"></label>
      <input value="<?php echo $data ['nm_ibu_kan']?>" type="text" name="nm_ibu_kan" id="nm_ibu_kan" /></td>
  </tr>
   <tr>
    <td>Nama Pelapor</td>
    <td><label for="nm_pel"></label>
      <input value="<?php echo $data ['nm_pel']?>" type="text" name="nm_pel" id="nm_pel" /></td>
  </tr>
  <tr>
 <td>Hubungan Pelapor Dengan Bayi</td>
    <td><label for="hub_pel"></label>
    <select name="hub_pel" id="hub_pel">
    <option><?php echo $data['hub_pel']?></option>
    <option> Ibu </option>
    <option> Ayah </option>
    <option> Saudara </option>
	<option> Kakek </option>
	<option> Nenek </option>
	<option> Paman </option>
	<option> Bibi </option>
	</select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
  </tr>
</table>
 </form>
</body>
</html>