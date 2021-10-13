<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("koneksi.php");
$cari=mysql_query("select * from akta_kematian where no_mati='$no_mati'");
$data=mysql_fetch_array($cari);
?>
<form action="update_ak.php" method="post">
<table width="100%" border="0">
  <tr>
    <td width="15%">No Surat Kematian</td>
    <td width="85%"><label for="no_mati"></label>
      <input value="<?php echo $data ['no_mati']?>" type="text" name="no_mati" id="no_mati" readonly="readonly" /></td>
  </tr>
  <tr>
  <td> Nama Lengkap</td>
  <td><label for="nama_lengkap"></label>
  <input value="<?php echo $data ['nama_lengkap']?>" type="text" name="nama_lengkap" id="nama_lengkap"/></td>
  </tr>
   <tr>
  <td>NIK</td>
  <td><label for="nik"></label>
  <input value="<?php echo $data ['nik']?>" type="text" name="nik" id="nik"/></td>
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
  <td>Tempat Lahir</td>
  <td><label for="tempat_lahir"></label>
  <input value="<?php echo $data ['tempat_lahir']?>" type="text" name="tempat_lahir" id="tempat_lahir"/></td>
  </tr>
  <tr>
  <td>Tanggal Lahir</td>
  <td><label for="tgl_lahir"></label>
  <input value="<?php echo $data ['tgl_lahir']?>" type="date" name="tgl_lahir" id="tgl_lahir"/></td>
  </tr>
     <tr>
  <td>Umur</td>
  <td><label for="umur"></label>
  <input value="<?php echo $data ['umur']?>" type="text" name="umur" id="umur"/></td>
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
  <td><label for="alamat"></label>
  <input value="<?php echo $data ['alamat']?>" type="text" name="alamat" id="alamat"/></td>
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
	</td>
  </tr>
   <tr>
  <td>Tanggal Meninggal</td>
  <td><label for="tgl_meninggal"></label>
  <input value="<?php echo $data ['tgl_meninggal']?>" type="date" name="tgl_meninggal" id="tgl_meninggal"/></td>
  </tr>
  <tr>
  <td>Tempat Meninggal</td>
  <td><label for="tem_meninggal"></label>
  <input value="<?php echo $data ['tem_meninggal']?>" type="text" name="tem_meninggal" id="tem_meninggal"/></td>
  </tr>
  <tr>
  <td>Penyebab Kematian</td>
  <td><label for="peny_kematian"></label>
  <input value="<?php echo $data ['peny_kematian']?>" type="text" name="peny_kematian" id="peny_kematian"/></td>
  </tr>
  <tr>
  <td>Nama Pelapor</td>
  <td><label for="nm_pelapor"></label>
  <input value="<?php echo $data ['nm_pelapor']?>" type="text" name="nm_pelapor" id="nm_pelpaor"/></td>
  </tr>
   <tr>
  <td>Tempat Lahir</td>
  <td><label for="tmp_lah_pel"></label>
  <input value="<?php echo $data ['tmp_lah_pel']?>" type="text" name="tmp_lah_pel" id="tmp_lah_pel"/></td>
  </tr>
  <tr>
  <td>Tanggal Lahir</td>
  <td><label for="tgl_lah_pel"></label>
  <input value="<?php echo $data ['tgl_lah_pel']?>" type="date" name="tgl_lah_pel" id="tgl_lah_pel"/></td>
  </tr>
     <tr>
  <td>Umur</td>
  <td><label for="umur_pel"></label>
  <input value="<?php echo $data ['umur_pel']?>" type="text" name="umur_pel" id="umur_pel"/></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td><label for="pekerjaan_pel"></label>
    <select name="pekerjaan_pel" id="pekerjaan_pel">
    <option><?php echo $data['pekerjaan_pel']?></option>
    <option> Belum/Tidak Bekerja </option>
	<option> Mengurus Rumah Tangga </option>
    <option> Pelajar/Mahasiswa </option>
	<option> Karyawan Swasta </option>
	<option> Wiraswasta </option>
	<option> Buruh Harian Lepas </option>
    </select>
   </tr>
  <tr>
  <td>Alamat</td>
  <td><label for="alamat_pel"></label>
  <input value="<?php echo $data ['alamat_pel']?>" type="text" name="alamat_pel" id="alamat_pel"/></td>
  </tr>
   <tr>
 <td>Hubungan Pelapor</td>
    <td><label for="hub_pelapor"></label>
    <select name="hub_pelapor" id="hub_pelapor">
    <option><?php echo $data['hub_pelapor']?></option>
    <option> Istri </option>
    <option> Anak </option>
    <option> Saudara </option>
	</select>
    </td>
  </tr>
  <tr>
    <td>Pengantar RT</td>
    <td><label for="pengantar_rt"></label>
      <input value="<?php echo $data['pengantar_rt']?>" type="file" name="pengantar_rt" id="pengantar_rt" /></td>
  </tr>
  <tr>
    <td>Pengantar RW</td>
    <td><label for="pengantar_rw"></label>
      <input value="<?php echo $data['pengantar_rw']?>" type="file" name="pengantar_rw" id="pengantar_rw" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
  </tr>
</table>



 </form>
</body>
</html>