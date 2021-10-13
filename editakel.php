<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("koneksi.php");
$cari=mysql_query("select * from akta_kelahiran where no_lahir='$no_lahir'");
$data=mysql_fetch_array($cari);
?>
<form action="update_akel.php" method="post">
<table width="100%" border="0">
  <tr>
    <td width="15%">No Akta Kelahiran</td>
    <td width="85%"><label for="no_lahir"></label>
      <input value="<?php echo $data ['no_lahir']?>" type="text" name="no_lahir" id="no_lahir" readonly="readonly" /></td>
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
    <td>Pukul</td>
    <td><label for="pukul"></label>
      <input value="<?php echo $data ['pukul']?>" type="time" name="pukul" id="pukul" /></td>
  </tr>
      <tr>
    <td>Tanggal Lahir</td>
    <td><label for="tgl_lahir"></label>
      <input value="<?php echo $data ['tgl_lahir']?>" type="date" name="tgl_lahir" id="tgl_lahir_anak" /></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><label for="tmpt_lahir"></label>
      <input value="<?php echo $data ['tmpt_lahir']?>" type="text" name="tmpt_lahir" id="tmpt_lahir" /></td>
   </tr>
 <tr>
 <td>Telah Lahir Seorang Anak</td>
    <td><label for="tel_lah_anak"></label>
    <select name="tel_lah_anak" id="tel_lah_anak">
    <option><?php echo $data['tel_lah_anak']?></option>
    <option> Laki-laki </option>
    <option> Perempuan </option>
    </select>
    </td>
  </tr>
    <tr>
    <td>Bernama</td>
    <td><label for="bernama"></label>
      <input value="<?php echo $data ['bernama']?>" type="text" name="bernama" id="bernama" /></td>
   </tr>
    <td>Dari Seorang Ibu</td>
    <td><label for="dr_seor_ibu"></label>
      <input value="<?php echo $data ['dr_seor_ibu']?>" type="text" name="dr_seor_ibu" id="dr_seor_ibu" /></td>
   </tr>
   <tr>
  <tr>
    <td><p>Nama Ibu</p></td>
    <td><label for="nm_ibu"></label>
      <input value="<?php echo $data ['nm_ibu']?>" type="text" name="nm_ibu" id="nm_ibu" /></td>
  </tr>
<tr>
    <td>NIK</td>
    <td><label for="nik_ibu"></label>
      <input value="<?php echo $data ['nik_ibu']?>" type="text" name="nik_ibu" id="nik_ibu" /></td>
  </tr>
 <tr>
    <td>Umur</td>
    <td><label for="umur_ibu"></label>
      <input value="<?php echo $data ['umur_ibu']?>" type="text" name="umur_ibu" id="umur_ibu" /></td>
  </tr>
  <tr>
     <td>Pekerjaan Ibu</td>
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
    <td>Alamat</td>
    <td><label for="alamat_ibu"></label>
      <input value="<?php echo $data ['alamat_ibu']?>" type="text" name="alamat_ibu" id="alamat_ibu" /></td>
  </tr>
  <tr>
    <td>Nama Ayah</td>
    <td><label for="nama_ayah"></label>
      <input value="<?php echo $data ['nama_ayah']?>" type="text" name="nama_ayah" id="nama_ayah" /></td>
  </tr>
    <td>NIK</td>
    <td><label for="nik_ayah"></label>
      <input value="<?php echo $data ['nik_ayah']?>" type="text" name="nik_ayah" id="nik_ayah" /></td>
  </tr>
    <tr>
    <td>Umur Ayah</td>
    <td><label for="umur_ayah"></label>
      <input value="<?php echo $data ['umur_ayah']?>" type="text" name="umur_ayah" id="umur_ayah" /></td>
  </tr>
  <tr>
     <td>Pekerjaan Ayah</td>
    <td><label for="pekerjaan_ayah"></label>
    <select name="pekerjaan_ayah" id="pekerjaan_ayah">
    <option><?php echo $data['pekerjaan_ayah']?></option>
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
    <td><label for="Alamat_ayah"></label>
      <input value="<?php echo $data ['Alamat_ayah']?>" type="text" name="Alamat_ayah" id="Alamat_ayah" /></td>
  </tr>
   <tr>
    <td>Nama Pelapor</td>
    <td><label for="nm_pelapor"></label>
      <input value="<?php echo $data ['nm_pelapor']?>" type="text" name="nm_pelapor" id="nm_pelapor" /></td>
  </tr>
     <tr>
    <td>NIK</td>
    <td><label for="nik_pel"></label>
      <input value="<?php echo $data ['nik_pel']?>" type="text" name="nik_pel" id="nik_pel" /></td>
  </tr>
     <tr>
    <td>Umur</td>
    <td><label for="umur_pel"></label>
      <input value="<?php echo $data ['umur_pel']?>" type="text" name="umur_pel" id="umur_pel" /></td>
  </tr>
   <tr>
    <td>Pekerjaan</td>
    <td><label for="pekerjaanPel"></label>
      <input value="<?php echo $data ['pekerjaan_pel']?>" type="text" name="pekerjaan_pel" id="pekerjaan_pel" /></td>
  </tr>
     <tr>
    <td>Alamat</td>
    <td><label for="alamat_pel"></label>
      <input value="<?php echo $data ['alamat_pel']?>" type="text" name="alamat_pel" id="alamat_pel" /></td>
  </tr>
  <tr>
 <td>Hubungan Pelapor Dengan Bayi</td>
    <td><label for="hub_pel_bayi"></label>
    <select name="hub_pel_bayi" id="hub_pel_bayi">
    <option><?php echo $data['hub_pel_bayi']?></option>
    <option> Ayah </option>
    <option> Ibu </option>
    <option> Saudara </option>
	<option> Kakek </option>
	<option> Nenek </option>
	<option> Paman </option>
	<option> Bibi </option>
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