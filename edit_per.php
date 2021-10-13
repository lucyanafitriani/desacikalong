<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include ("koneksi.php");
$cari= mysql_query("select * from akta_pernikahan where no_surat='$no_surat'");
$data=mysql_fetch_array($cari);
?>
<form action="update_per.php" method="post">
<table width="100%" border="0">
  <tr>
    <td width="15%">No.Surat</td>
    <td width="85%"><label for="no_surat"></label>
      <input value="<?php echo $data ['no_surat']?>" type="text" name="no_surat" id="no_surat" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>Nik</td>
    <td><label for="nik"></label>
      <input value="<?php echo $data ['nik']?>" type="text" name="nik" id="nik" /></td>
  </tr>
  <tr>
    <td><p>Tanggal Surat</p></td>
    <td><label for="tgl_surat"></label>
      <input value="<?php echo $data ['tgl_surat']?>" type="date" name="tgl_surat" id="tgl_surat" /></td>
  </tr>
  <tr>
    <td>Tanggal Nikah</td>
    <td><label for="tgl_nikah"></label>
      <input value="<?php echo $data ['tgl_pernikahan']?>" type="date" name="tgl_nikah" id="tgl_nikah" /></td>
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