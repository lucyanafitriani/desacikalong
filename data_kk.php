<?php
session_start ();
$un=$_SESSION['ses_un_admin'];
$ha=$_SESSION['ses_un_ha'];
echo $un;
?>

<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<form method="get" >
  <input type="hidden" name="hal" id="hal" value="kk" />
  <input type="text" name="crno_pengajuan " value="<? echo $crno_pengajuan?>" id="crno_pengajuan"  placeholder="Cari No pengajuan"/>
   <input type="submit" name="c" id="c" value="Cari" />


<table width="100%
" border="1" id="customers">
  <tr> 
    <th>Tool</th>
	<th>No Pengajuan</th>
	<th>Status</th>
	<th>Pengajuan</th>
	<th>Provinsi</th>
	<th>Kabupaten/Kota</th>
	<th>Kec</th>
	<th>Kel/Desa</th>
	<th>Nama Pemohon</th>
	<th>Nama Kepala Kel</th>
	<th>Alamat</th>
	<th>RT</th>
	<th>RW</th>
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
	<th>Fotocopy/Scant S.Nikah</th>
  <?php
  include("koneksi.php");
  if ($ha==''){
  $tampil=mysql_query("select * from data_kk");
  } else{
  $tampil=mysql_query("select * from data_kk where pengajuan='$un'");}
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
    <td><a onClick="return confirm('Yakin?')" href="hapus_kk.php?no_pengajuan=<?php echo $data['no_pengajuan']?>" ><img src="img/dlt.png" width="35" height="35"> </a>
    <a href="?hal=edit_kk&no_pengajuan=<?php echo $data['no_pengajuan']?>"><img src="img/edt.png" width="35" height="35"> </a> <a onClick="return confirm('Yakin?')" href="konfir_kk.php?no_pengajuan=<?php echo $data['no_pengajuan']?>"><img src="img/centang.png" width="35" height="35"> </a> <a onClick="return confirm('Yakin?')" href="konfir_lak_kk.php?no_pengajuan=<?php echo $data['no_pengajuan']?>" ><img src="img/silang.jfif" width="35" height="35"> </a>
	<a href="cetak_kk.php?no_pengajuan=<?php echo $data['no_pengajuan']?>" > Cetak</a></td>
	<td><?php echo $data['no_pengajuan'] ?></td>
	<td><?php echo $data['status'] ?></td>
	<td><?php echo $data['pengajuan'] ?></td>
	<td><?php echo $data['provinsi'] ?></td>
	<td><?php echo $data['kabupaten_kota'] ?></td>
	<td><?php echo $data['kecamatan'] ?></td>
	<td><?php echo $data['desa_kelurahan'] ?></td>
	<td><?php echo $data['nm_pem'] ?></td>
	<td><?php echo $data['nm_kep_kel'] ?></td>
	<td><?php echo $data['alamat'] ?></td>
	<td><?php echo $data['rt'] ?></td>
	<td><?php echo $data['rw'] ?></td>
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
	<td><a href="pengantar/<?php echo $data ['fc_sc_nikah'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['fc_sc_nikah'] ?>" width="100" height="100"></a> 
	</td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
<br />
<form action="simpan_kk.php" method="post">
<table width="100%" border="0">
	<tr>
      <td width="15%">No Pengajuan</td>
    <td width="85%"><label for="no_pengajuan"></label>
      <input type="text" name="no_pengajuan" id="no_pengajuan" /></td>
	</tr>
<tr>
    <td>Provinsi</td>
    <td><label for="provinsi"></label>
      <input type="text" name="provinsi" id="provinsi" value="Jawa Barat" /></td>
  </tr>
<tr>
    <td>Kabupaten/Kota</td>
    <td><label for="kabupaten_kota"></label>
      <input type="text" name="kabupaten_kota" id="kabupaen_kota" value="Karawang" /></td>
  </tr>
   <tr>
	<td>Kecamatan</td>
	<td><label for="kecamatan"></label>
	<input type="text" name="kecamatan" id="kecamatan" value="Cilamaya Wetan" /></td>
	</tr>
	<tr>
	<td>Kel/Desa</td>
	<td><label for="desa_kelurahan"></label>
	<input type="text" name="desa_kelurahan" id="desa_kelurahan" value="Cikalong" /></td>
	</tr>
	 <tr>
    <td><p>Nama Pemohon</p></td>
    <td><label for="nm_pem"></label>
      <input type="text" name="nm_pem" id="nm_pem" /></td>
	</tr>
	 <tr>
    <td><p>Nama Kepala Kel</p></td>
    <td><label for="nm_kep_kel"></label>
      <input type="text" name="nm_kep_kel" id="nm_kep_kel" /></td>
  </tr>
  	<tr>
    <td>Nama Lengkap</td>
    <td><label for="nm_lengkap"></label>
      <input type="text" name="nm_lengkap" id="nm_lengkap" /></td>
  </tr>
     <tr>
    <td><p>Alamat</p></td>
    <td><label for="alamat"></label>
      <input type="text" name="alamat" id="alamat" /></td>
  </tr>
  	<tr>
    <td><p>RT</p></td>
    <td><label for="rt"></label>
      <input type="text" name="rt" id="rt" /></td>
  </tr>
  <tr>
    <td><p>RW</p></td>
    <td><label for="rw"></label>
      <input type="text" name="rw" id="rw" /></td>
  </tr>
	  <tr>
    <td>NIK</td>
    <td><label for="nik"></label>
      <input type="text" name="nik" id="nik" maxlength="16" /></td>
  </tr>
  	<tr>
    <td><p>Tempat Lahir</p></td>
    <td><label for="tempat_lahir"></label>
      <input type="text" name="tempat_lahir" id="tempat_lahir" /></td>
  </tr>
   <tr>
    <td><p>Tanggal Lahir</p></td>
    <td><label for="tangal_lahir"></label>
      <input type="text" name="tanggal_lahir" id="tanggal_lahir" /></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><label for="jenis_kelamin"></label>
    <select name="jenias_kelamin" id="jenis_kelamin">
    <option> Laki-laki </option>
    <option> Perempuan </option>
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
    <td>Status Perkawinan</td>
    <td><label for="status_perkawinan"></label>
    <select name="status_perkawinan" id="status_perkawinan">
    <option> Belum Kawin </option>
    <option> Kawin </option>
    </select>
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
	<td>Hubungan Dengan Kepala Kel</td>
    <td><label for="hub_kep"></label>
    <select name="hub_kep" id="hub_kep">
    <option> Kepala Keluarga </option>
	<option> Istri </option>
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
  <td>Fotocopy/Scant S.Nikah</td>
    <td><label for="fc_sc_nikah"></label>
      <input type="file" name="fc_sc_nikah" id="fc_sc_nikah" /></td>
	  </tr> 
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
  </tr>
</table>
 </form>