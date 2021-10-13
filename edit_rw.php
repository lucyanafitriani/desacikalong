<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("koneksi.php");
$cari=mysql_query("select * from pengantar_rw where no_regis='$no_regis'");
$data=mysql_fetch_array($cari);
?>
<form action="update_rw.php" method="post">
<table width="100%" border="0">
  <tr>
    <td width="15%">No Regis</td>
    <td width="85%"><label for="no_regis"></label>
      <input value="<?php echo $data ['no_regis']?>" type="text" name="no_regis" id="no_regis" readonly="readonly" /></td>
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
    <td><label for="tgl_lahir"></label>
      <input value="<?php echo $data ['tgl_lahir']?>" type="date" name="tgl_lahir" id="tgl_lahir" /></td>
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
     <td>Pekerjaan</td>
    <td><label for="pekerjaan"></label>
    <select name="pekerjaan" id="pekerjaan">
    <option><?php echo $data['pekerjaan']?></option>
    <option> Belum/Tidak Bekerja </option>
	<option> Mengurus Rumah Tangga </option>
    <option> Pelajar/Mahasiswa </option>
	<option> Karyawan Swasta </option>
	<option> Wiraswasta </option>
	<option> Buruh Harian Lepas </option>
    </select>
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
    <td>Status Perkawinan</td>
    <td><label for="status_perkawinan"></label>
    <select name="status_perkawinan" id="status_perkawinan">
    <option> <?php echo $data['status_perkawinan']?></option>
    <option> Belum Kawin </option>
    <option> Kawin </option>
    </select>
    </td>
  </tr>
  	  <tr>
    <td>Kewarganegaraan</td>
    <td><label for="kewarganegaraan"></label>
      <input value="<?php echo $data['kewarganegaraan']?>" type="text" name="kewarganegaraan" id="kewarganegaraan" /></td>
  </tr>
      <tr>
    <td>Alamat</td>
    <td><label for="alamat_ibu"></label>
      <input value="<?php echo $data ['alamat_ibu']?>" type="text" name="alamat_ibu" id="alamat_ibu" /></td>
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