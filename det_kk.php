
<?php
include("koneksi.php");
$cari=mysql_query("select * from header_kk where no_pengajuan='$nidp'");
$data=mysql_fetch_array($tampil);
?>
<form action="simpan_kk.php" method="post">
<table width="100%" border="0">
    <tr>
    <td>Nama Pemohon</td>
    <td><label for="nama_pem"></label>
      <input value="<?php echo $data['nama_pem']?>" type="text" name="nama_lengkap" id="nama_lengkap" /></td>
  </tr>
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
    <td><label for="kelurahan_desa"></label>
      <input value="<?php echo $data['desa_kelurahan']?>"type="text" name="desa_kelurahan" id="desa_kelurahan" value="Cikalong"/></td>
  </tr>
<table width="100%" border="0">
<tr>
    <td>Nama Lengkap</td>
    <td><label for="nm_lengkap"></label>
      <input type="text" name="nm_lengkap" id="nm_lengkap" /></td>
  </tr>
	  <tr>
    <td>NIK</td>
    <td><label for="nik"></label>
      <input type="text" name="nik" id="nik" /></td>
  </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td><label for="jenis_kelamin"></label>
    <select name="jenis_kelamin" id="jenis_kelamin">
    <option> Laki-laki </option>
    <option> Perempuan </option>
    </select>
    </td>
  </tr>
  	<tr>
    <td><p>Tempat Lahir</p></td>
    <td><label for="tempat_lahir"></label>
      <input type="text" name="tempat_lahir" id="tempat_lahir" /></td>
  </tr>
   <tr>
    <td><p>Tanggal Lahir</p></td>
    <td><label for="tangal_lahir"></label>
      <input type="date" name="tanggal_lahir" id="tanggal_lahir" /></td>
  </tr>
    <tr>
    <td>Agama</td>
    <td><label for="agama"></label>
    <select name="agama" id="agama">
    <option> Islam </option>
    <option> Kristen </option>
    <option> katolik </option>
    <option> Buddha </option>
    <option> Hindu </option>
    <option> Khong Hu Cu </option>
    </td>
	</tr>
	<tr>
    <td>Pendidikan</td>
    <td><label for="pendidikan"></label>
    <select name="pendidikan" id="pendidikan">
    <option> S1 </option>
    <option> S2 </option>
	<option> S3 </option>
	<option> D3 </option>
	<option> D4 </option>
	<option> SMA/SMK </option>
	<option> SMP </option>
	<option> Sederajat </option>
    </select>
    </td>
  </tr>
    <tr>
    <td>Pekerjaan</td>
    <td><label for="pekerjaan"></label>
    <select name="pekerjaan" id="pekerjaan">
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
  </tr>
  <tr>
    <td>Kewarganegaraan</td>
    <td><label for="kewarganegaraan"></label>
    <select name="kewarganegaraan" id="kewarganegaraan">
    <option> WNI </option>
    <option> WNA </option>
    <option> WNA Keturunan </option>
	</select>
    </td>
	</tr>
	 <tr>
    <td>Gol Darah</td>
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
    <td>Status Perkawinan</td>
    <td><label for="status_perkawinan"></label>
    <select name="status_perkawinan" id="status_perkawinan">
    <option> Belum Kawin </option>
    <option> Kawin </option>
    </select>
    </td>
  </tr>
	<tr>
	<td>Hubungan Dengan Kepala Kel</td>
    <td><label for="hub_kep"></label>
    <select name="hub_kep" id="hub_kep">
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
    <td><label for="nm_ayah"></label>
      <input type="text" name="nm_ayah" id="nm_ayah" /></td>
  </tr>
    <tr>
    <td>Nama Ibu </td>
    <td><label for="nm_ibu"></label>
      <input type="text" name="nm_ibu" id="nm_ibu" /></td>
  </tr>
    <tr>
  <td>Pengantar RT</td>
    <td><label for="pengantar_rt"></label>
      <input type="file" name="pengantar_rt" id="pengantar_rt" /></td>
	  </tr> 
	    <tr>
  <td>Pengantar RW</td>
    <td><label for="pengantar_rw"></label>
      <input type="file" name="pengantar_rw" id="pengantar_rw" /></td>
	  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
  </tr>
</table>
 </form>
 


<table width="100%
" border="1" id="customers">
  <tr> 
	<th>Nama Lengkap</th>
	<th>NIK</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>jenis_kelamin</th>
	<th>kewarganegaraan</th>
	<th>Gol Darah</th>
	<th>Agama</th>
	<th>Status Perkawinan</th>
	<th>Pendidikan</th>
	<th>Pekerjaan</th>
	<th>Hubungan Dengan Kepala Kel</th>
	<th>Nama Ayah</th>
	<th>Nama Ibu</th>
	<th>Pengantar RT</th>
	<th>Pengantar RW</th>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from data_kk where no_pengajuan='$nidp'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
	<td><?php echo $data['nm_lengkap'] ?></td>
	<td><?php echo $data['nik'] ?></td>
	<td><?php echo $data['tempat_lahir'] ?></td>
	<td><?php echo $data['tanggal_lahir'] ?></td>
	<td><?php echo $data['jenis_kelamin'] ?></td>
	<td><?php echo $data['kewarganegaraan'] ?></td>
	<td><?php echo $data['gol_darah'] ?></td>
	<td><?php echo $data['agama'] ?></td>
	<td><?php echo $data['status_perkawinan'] ?></td>
	<td><?php echo $data['pendidikan'] ?></td>
	<td><?php echo $data['pekerjaan'] ?></td>
	<td><?php echo $data['hub_kep'] ?></td>
	<td><?php echo $data['nm_ayah'] ?></td>
	<td><?php echo $data['nm_ibu'] ?></td>
<td><a href="pengantar/<?php echo $data ['pengantar_rt'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['pengantar_rt'] ?>" width="100" height="100"></a></td>
	<td><a href="pengantar/<?php echo $data ['pengantar_rw'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['pengantar_rw'] ?>" width="100" height="100"></a> 
	</td>
  </tr>
  <?php
  }
  ?>
</table>