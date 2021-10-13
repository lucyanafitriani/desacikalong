<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("koneksi.php");
$cari=mysql_query("select * from data_penduduk where nik='$nik'");
$data=mysql_fetch_array($cari);
?>
<form action="update_pen.php" method="post">
<table width="100%" border="0">
  <tr>
    <td>Nik</td>
    <td><label for="nik"></label>
      <input value="<?php echo $data['nik']?>" type="text" name="nik" id="nik" readonly="readonly" /></td>
  </tr>
  <tr>
    <td width="15%">Nama</td>
    <td width="85%"><label for="nama"></label>
      <input value="<?php echo $data ['nama']?>" type="text" name="nama" id="nama" /></td>
  </tr>
  <tr>
    <td width="15%">Tempat Lahir</td>
    <td width="85%"><label for="tem_lahir"></label>
      <input value="<?php echo $data ['tem_lahir']?>" type="text" name="tem_lahir" id="no_kk" /></td>
  </tr>
    <tr>
    <td><p>Tanggal Lahir</p></td>
    <td><label for="tgl_lahir"></label>
      <input value="<?php echo $data['tgl_lahir']?>" type="date" name="tgl_lahir" id="tgl_lahir" /></td>
  </tr>
<tr>
    <td width="15%">Nama Ibu</td>
    <td width="85%"><label for="nama_ibu"></label>
      <input value="<?php echo $data ['nama_ibu']?>" type="text" name="nama_ibu" id="nama_ibu" /></td>
  </tr>
  <tr>
    <td width="15%">Nama Ayah</td>
    <td width="85%"><label for="nama_ayah"></label>
      <input value="<?php echo $data ['nama_ayah']?>" type="text" name="nama_ayah" id="nama_ayah" /></td>
  </tr>
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
  <tr>
    <td>Golongan Darah</td>
    <td><label for="gdr"></label>
    <select name="gdr" id=gdr">
	<option> - </option>
    <option> O </option>
    <option> B </option>
	<option> A </option>
	<option> AB </option>
    </select>
   </td>
  </tr>
    <td>Jenis Kelamin</td>
    <td><label for="jk"></label>
    <select name="jk" id="jk">
    <option><?php echo $data['jk']?></option>
    <option> Laki-laki </option>
    <option> Perempuan </option>
    </select>
    </td>
  </tr>
    <td>Status</td>
    <td><label for="status"></label>
    <select name="status" id="status">
    <option> <?php echo $data['status']?></option>
    <option> Belum Kawin </option>
    <option> Kawin </option>
    </select>
    </td>
  </tr>
  <td>Pekerjaan</td>
    <td><label for="pekerjaan"></label>
      <input value="<?php echo $data['pekerjaan']?>" type="text" name="pekerjaan" id="pekerjaan" /></td>
  </tr>
  <tr>
  <td>Alamat</td>
    <td><label for="alamat"></label>
      <input value="<?php echo $data['alamat']?>"type="text" name="alamat" id="alamat" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
  </tr>
</table>
 </form>
</body>
</html>