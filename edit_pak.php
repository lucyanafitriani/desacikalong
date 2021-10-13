<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("koneksi.php");
$cari=mysql_query("select * from pengantar_aka where no_regis_mati='$no_regis_mati'");
$data=mysql_fetch_array($cari);
?>
<form action="update_pak.php" method="post">
<table width="100%" border="0">
  <tr>
    <td width="15%">No Regis Mati</td>
    <td width="85%"><label for="no_regis_mati"></label>
      <input value="<?php echo $data ['no_regis_mati']?>" type="text" name="no_regis_mati" id="no_regis_mati" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><label for="nama"></label>
      <input value="<?php echo $data ['nama']?>" type="text" name="nama" id="nama" /></td>
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
 <td>Jenis Kelamin</td>
    <td><label for="jenis_kelamin"></label>
    <select name="jenis_kelamin" id="jenis_kelamin">
    <option><?php echo $data['jenis_kelamin']?></option>
    <option> Laki-laki </option>
    <option> Perempuan </option>
    </select>
    </td>
  </tr>
  <tr>
     <td>Agama</td>
    <td><label for="agama"></label>
    <select name="agama" id="agama">
    <option><?php echo $data['agama']?></option>
    <option> Islam </option>
    <option> Kristen </option>
    <option> katolik </option>
    <option> Buddha </option>
    <option> Hindu </option>
    <option> Khong Hu Cu </option>
    </td>
  </tr>
      <tr>
    <td>Alamat</td>
    <td><label for="alamat_ibu"></label>
      <input value="<?php echo $data ['alamat_ibu']?>" type="text" name="alamat_ibu" id="alamat_ibu" /></td>
  </tr>
    <tr>
     <td>Hari</td>
    <td><label for="hari"></label>
    <select name="hari" id="hari">
    <option><?php echo $data['hari']?></option>
    <option> Minggu </option>
	<option> Senin </option>
    <option> Selasa </option>
	<option> Rabu </option>
	<option> Kamis </option>
	<option> Jum'at </option>
	<option> Sabtu </option>
    </select>
  </tr>
    <tr>
    <td>Tanggal</td>
    <td><label for="tanggal"></label>
      <input value="<?php echo $data ['tanggal']?>" type="date" name="tanggal" id="tanggal" /></td>
  </tr>
      <tr>
    <td>Pukul</td>
    <td><label for="pukul"></label>
      <input value="<?php echo $data ['pukul']?>" type="time" name="pukul" id="pukul" /></td>
  </tr>
    <tr>
  <td>Tempat</td>
  <td><label for="tempat"></label>
  <input value="<?php echo $data ['tempat']?>" type="text" name="tempat" id="tempat"/></td>
  </tr>
  <tr>
  <td>Penyebab</td>
  <td><label for="penyebab"></label>
  <input value="<?php echo $data ['penyebab']?>" type="text" name="penyebab" id="penyebab"/></td>
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