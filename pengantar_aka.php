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
  <input type="hidden" name="hal" id="hal" value="aka" />
  <input type="text" name="crno_mati" value="<? echo $crno_mati?>" id="crno_mati"  placeholder="Cari No Kematian"/>
   <input type="submit" name="c" id="c" value="Cari" />


<table width="100%
" border="1" id="customers">
  <tr>
    <th>Tool</th>
	<th>No Surat Kematian</th>
	<th>Status</th>
	<th>Pengajuan</th>
    <th>Nama</th>
	<th>NIK</th>
    <th>Jenis Kelamin</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Umur</th>
	<th>Agama</th>
	<th>Alamat</th>
	<th>Hari</th>
	<th>Tanggal Meninggal</th>
	<th>Penyebab Kematian</th>
	<th>Nama Pelapor</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Umur</th>
	<th>Pekerjaan</th>
	<th>Alamat</th>
	<th>Hubungan Pelapor</th>
	<th>Pengantar RT</th>
	<th>Pengantar RW</th>
  </tr>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from akta_kematian  where no_mati like '%$crno_mati%'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
    <td><a onClick="return confirm('Yakin?')" href="hapus_ake.php?no_mati=<?php echo $data['no_mati']?>" ><img src="img/dlt.png" width="35" height="35"> </a>
    <a href="?hal=editak&no_mati=<?php echo $data['no_mati']?>"><img src="img/edt.png" width="35" height="35"> </a>
	<a href="cetak_aka.php?no_mati=<?php echo $data['no_mati']?>" > Cetak</a></td>
	<td><?php echo $data['no_mati'] ?></td>
	<td><?php echo $data['status'] ?></td>
	<td><?php echo $data['pengajuan'] ?></td>
	<td><?php echo $data['nama_lengkap'] ?></td>
	<td><?php echo $data['nik'] ?></td>
	<td><?php echo $data['jenis_kelamin'] ?></td>
	<td><?php echo $data['tempat_lahir']?></td>
	<td><?php echo $data['tgl_lahir'] ?></td>
    <td><?php echo $data['umur'] ?></td>
	<td><?php echo $data['agama'] ?></td>
	<td><?php echo $data['alamat'] ?></td>
	<td><?php echo $data['hari'] ?></td>
	<td><?php echo $data['tgl_meninggal'] ?></td>
	<td><?php echo $data['peny_kematian'] ?></td>
	<td><?php echo $data['nm_pelapor'] ?></td>
	<td><?php echo $data['tmp_lah_pel'] ?></td>
	<td><?php echo $data['tgl_lah_pel'] ?></td>
	<td><?php echo $data['umur_pel'] ?></td>
	<td><?php echo $data['pekerjaan_pel'] ?></td>
	<td><?php echo $data['alamat_pel'] ?></td>
	<td><?php echo $data['hub_pelapor'] ?></td>
<td><a href="pengantar/<?php echo $data ['pengantar_rt'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['pengantar_rt'] ?>" width="100" height="100"></a></td>
	<td><a href="pengantar/<?php echo $data ['pengantar_rw'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['pengantar_rw'] ?>" width="100" height="100"></a></td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
<br />
<form action="simpan_ak.php" method="post">
<table width="100%" border="0">
	 <tr>
    <td width="15%">No Surat Kematian</td>
    <td width="85%"><label for="no_mati"></label>
      <input type="text" name="no_mati" id="no_mati" /></td>
  </tr>
	<tr>
      <td width="15%">Nama Lengkap</td>
    <td width="85%"><label for=""></label>
      <input type="text" name="nama_lengkap" id="nama_lengkap" /></td>
	</tr>
	<tr>
    <td><p>NIK</p></td>
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
    <td><label for="tgl_lahir"></label>
      <input type="date" name="tgl_lahir" id="tgl_lahir" /></td>
  </tr>
  <tr>
    <td><p>Umur</p></td>
    <td><label for="umur"></label>
      <input type="text" name="umur" id="umur" /></td>
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
    <td><p>Alamat</p></td>
    <td><label for="alamat"></label>
      <input type="text" name="alamat" id="alamat" /></td>
  </tr>
      <td>Hari</td>
    <td><label for="hari"></label>
    <select name="hari" id="hari">
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
    <td><p>Tanggal Meninggal</p></td>
    <td><label for="tgl_meninggal"></label>
      <input type="date" name="tgl_meninggal" id="tgl_meninggal" /></td>
  </tr>
    <tr>
    <td><p>Penyebab Kematian</p></td>
    <td><label for="peny_kematian"></label>
      <input type="text" name="peny_kematian" id="peny_kematian" /></td>
  </tr>
      <tr>
    <td><p>Nama Pelapor</p></td>
    <td><label for="nm_pelpaor"></label>
      <input type="text" name="nm_pelapor" id="nm_pelapor" /></td>
  </tr>
    <tr>
    <td><p>Tempat Lahir</p></td>
    <td><label for="tmp_lah_pel"></label>
      <input type="text" name="tmp_lah_pel" id="tmp_lah_pel" /></td>
  </tr>
      <tr>
    <td><p>Tanggal Lahir</p></td>
    <td><label for="tgl_lah_pel"></label>
      <input type="text" name="tgl_lah_pel" id="tgl_lah_pel" /></td>
  </tr>
    <tr>
    <td><p>Umur</p></td>
    <td><label for="umur_pel"></label>
      <input type="text" name="umur_pel" id="umur_pel" /></td>
  </tr>
  <tr>
      <td>Pekerjaan</td>
    <td><label for="pekerjaan_pel"></label>
    <select name="pekerjaan_pel" id="pekerjaan_pel">
    <option> Belum/Tidak Bekerja </option>
	<option> Mengurus Rumah Tangga </option>
    <option> Pelajar/Mahasiswa </option>
	<option> Karyawan Swasta </option>
	<option> Wiraswasta </option>
	<option> Buruh Harian Lepas </option>
    </select>
    </td>
  </tr>
   <tr>
    <td><p>Alamat</p></td>
    <td><label for="alamat_pel"></label>
      <input type="text" name="alamat_pel" id="alamat_pel" /></td>
  </tr> 
<tr>  
<td>Hubungan Pelapor</td>
    <td><label for="hub_pelapor"></label>
    <select name="hub_pelapor" id="hub_pelapor">
    <option> Istri </option>
    <option> Anak </option>
	<option> Saudara </option>
    </select>
    </td>
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
  	  <td>Pengajuan</td>
    <td><label for="pengajuan"></label>
     <select name="pengajuan" id="pengajuan">
	 <?
	 include("koneksi.php");
	 $tampil=mysql_query("select * from tabel_admin where hak_akses='rt'");
	 while ($data=mysql_fetch_array($tampil)) {
	 ?>
<option value="<? echo $data['id_admin'] ?>"><? echo $data['id_admin'] ?></option>
	<?
	}
	?>
	</select>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
  </tr>
</table>
 </form>