<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("koneksi.php");
$cari=mysql_query("select * from data_kk where no_pengajuan='$no_pengajuan'");
$data=mysql_fetch_array($cari);
?>
<form action="update_kk.php" method="post">
<table width="100%" border="0">
<tr>
    <td width="15%">No Pengajuan</td>
    <td width="85%"><label for="no_pengajuan"></label>
      <input value="<?php echo $data ['no_pengajuan']?>" type="text" name="no_pengajuan" id="no_pengajuan"  readonly="readonly"/></td>
  </tr>
    <tr>
    <td>Provinsi</td>
    <td><label for="provinsi"></label>
      <input value="<?php echo $data['provinsi']?>" type="text" name="provinsi" id="provinsi" value="provinsi" /></td>
  </tr>
    <tr>
    <td>Kabupaten/Kota</td>
    <td><label for="kabupaten_kota"></label>
      <input value="<?php echo $data['kabupaten_kota']?>" type="text" name="kabupaten_kota" id="kabupaten_kota" value="Jawa Barat" /></td>
  </tr>
   <tr>
    <td>Kecamatan</td>
    <td><label for="kecamatan"></label>
      <input value="<?php echo $data['kecamatan']?>"type="text" name="kecamatan" id="kecamatan" value="kecamatan"/></td>
  </tr>
     <tr>
    <td>Kelurahan/Desa</td>
    <td><label for="desa_keluarahan"></label>
      <input value="<?php echo $data['desa_kelurahan']?>"type="text" name="desa_kelurahan" id="desa_kelurahan" value="Cikalong"/></td>
  </tr>
    <tr>
    <td>Nama Pemohon</td>
    <td><label for="nama_pem"></label>
      <input value="<?php echo $data['nm_pem']?>" type="text" name="nama_lengkap" id="nama_lengkap" /></td>
  </tr>
    <tr>
    <td>Nama Kepala Keluarga</td>
    <td><label for="nm_kep"></label>
      <input value="<?php echo $data['nm_kep_kel']?>" type="text" name="nm_kep" id="nm_kep" /></td>
  </tr>
  	<tr>
	  <td>Alamat</td>
    <td><label for="alamat"></label>
      <input value="<?php echo $data['alamat']?>"type="text" name="alamat" id="alamat" /></td>
  </tr>
    <tr>
    <td>RT</td>
    <td><label for="rt"></label>
      <input value="<?php echo $data['rt']?>"type="text" name="rt" id="rt" /></td>
  </tr>
  <tr>
    <td>RW</td>
    <td><label for="rw"></label>
      <input value="<?php echo $data['rw']?>"type="text" name="rw" id="rw" /></td>
  </tr>
    <tr>
    <td>Nama Lengkap</td>
    <td><label for="nm_lengkap"></label>
      <input value="<?php echo $data['nm_lengkap']?>"type="text" name="nm_lengkap" id="nm_lengkap" /></td>
  </tr>
    <tr>
    <td>NIK</td>
    <td><label for="nik"></label>
      <input value="<?php echo $data['nik']?>"type="text" name="nik" id="nik" /></td>
  </tr>
   <tr>
    <td>Tempat Lahir</td>
    <td><label for="tempat_lahir"></label>
      <input value="<?php echo $data['tempat_lahir']?>" type="text" name="tempat_lahir" id="tempat_lahir" /></td>
  </tr>
      <tr>
    <td>Tanggal Lahir</td>
    <td><label for="tanggal_lahir"></label>
      <input value="<?php echo $data['tanggal_lahir']?>" type="date" name="tanggal_lahir" id="tanggal_lahir" /></td>
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
    <td>Kewarganegaraan</td>
    <td><label for="kewarganegaraan"></label>
    <select name="kewarganegaraan" id="kewarganegaraan">
    <option><?php echo $data['kewarganegaraan']?></option>
    <option> WNI </option>
	<option> WNA </option>
    <option> WNA Keturunan </option>
    </select>
	</td>
	</tr>
    <tr>
    <td>Golongan Darah</td>
    <td><label for="gol_darah"></label>
    <select name="gol_darah" id=gol_darah">
	<option> - </option>
    <option> O </option>
    <option> B </option>
	<option> A </option>
	<option> AB </option>
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
     <td>Pendidikan</td>
    <td><label for="pendidikan"></label>
    <select name="pendidikan" id="pendidikan">
    <option><?php echo $data['pendidikan']?></option>
    <option> S1 </option>
    <option> S2 </option>
    <option> S3 </option>
    <option> D3 </option>
    <option> D4 </option>
    <option> SMA/SMK </option>
	<option> SMP </option>
	<option> Sederajat </option>
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
	<option> Pegawai Negeri Sipil </option>
	<option> Karyawan Swasta </option>
	<option> Wirausaha </option>
	<option> Wiraswasta </option>
	<option> Petani </option>
	<option> Pedagang </option>
	<option> Buruh Harian Lepas </option>
    </select>
	</td>
	<tr>
 <td>Hubungan Dengan Kepala Kel</td>
    <td><label for="hub_kep"></label>
    <select name="hub_kep" id="hub_kep">
    <option><?php echo $data['hub_kep']?></option>
    <option> Kepala Keluarga </option>
    <option> Ibu </option>
	<option> Anak </option>
	<option> Cucu </option>
    <option> Saudara </option>
	<option> Kakek </option>
	<option> Nenek </option>
	<option> Paman </option>
	<option> Bibi </option>
	</select>
    </td>
  </tr>
  <tr>
    <td>Nama Ayah</td>
    <td><label for="nama_ayah"></label>
      <input value="<?php echo $data['nama_ayah']?>"type="text" name="nama_ayah" id="nama_ayah" /></td>
  </tr>
  <tr>
    <td>Nama Ibu</td>
    <td><label for="nama_ibu"></label>
      <input value="<?php echo $data['nama_ibu']?>"type="text" name="nama_ibu" id="nama_ibu" /></td>
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