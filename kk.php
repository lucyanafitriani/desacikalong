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
  <input type="text" name="crno_pengajuan" value="<? echo $crno_pengajuan?>" id="crno_pengajuan"  placeholder="Cari No Pengajuan"/>
   <input type="submit" name="c" id="c" value="Cari" />


<table width="100%
" border="1" id="customers">
  <tr>
    <th>Tool</th>
	<th>No Pengajuan</th>
	<th>Nama Kepala Keluarga</th>
	<th>Alamat</th>
	 <th>Rt</th>
	 <th>Rw</th>
	<th>Kode Pos</th>
	<th>Desa/Kelurahan</th>
	<th>Kecamatan</th>
	<th>Kabupaten/Kota</th>
	<th>Provinsi</th>
	<th>Pengantar RT</th>
	<th>Penganta RW</th>
  </tr>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from tabel_kk  where no_pengajuan like '%$crno_pengajuan%'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
    <td><a onClick="return confirm('Yakin?')" href="hapus_kk.php?no_pengajuan=<?php echo $data['no_pengajuan']?>" ><img src="img/dlt.png" width="35" height="35"> </a>
    <a href="?hal=edit_kk&no_pengajuan=<?php echo $data['no_pengajuan']?>"><img src="img/edt.png" width="35" height="35"> </a>
		<a href="cetak_kk.php?no_pengajuan=<?php echo $data['no_pengajuan']?>" > Cetak</a></td>
	<td><?php echo $data['no_pengajuan'] ?></td>
	<td><?php echo $data['nama_kep_kel'] ?></td>
	<td><?php echo $data['alamat'] ?></td>
    <td><?php echo $data ['rt'] ?></td>
	<td><?php echo $data ['rw'] ?></td>
	<td><?php echo $data ['kode_pos'] ?></td>
	<td><?php echo $data ['desa_kelurahan'] ?></td>
	<td><?php echo $data ['kecamatan'] ?></td>
	<td><?php echo $data ['kabupaten_kota'] ?></td>
    <td><?php echo $data ['provinsi'] ?></td>
	<td><a href="pengantar/<?php echo $data ['pengantar_rt'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['pengantar_rt'] ?>" width="100" height="100"></a></td>
	<td><a href="pengantar/<?php echo $data ['pengantar_rw'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['pengantar_rw'] ?>" width="100" height="100"></a></td>
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
    <td>No Pengajuan</td>
    <td><label for="no_pengajuan"></label>
      <input type="text" name="no_pengajuan" id="no_pengajuan" /></td>
  </tr>
	<tr>
      <td width="15%">Nama Kepala Keluarga</td>
    <td width="85%"><label for="nama_kep_kel"></label>
      <input type="text" name="nama_kep_kel" id="nama_kep_kel" /></td>
	</tr>
	 <tr>
    <td width="15%">Alamat</td>
    <td width="85%"><label for="alamat"></label>
      <input type="text" name="alamat" id="alamat" /></td>
  </tr>
    <tr>
    <td><p>Rt</p></td>
    <td><label for="rt"></label>
      <input type="text" name="rt" id="rt" /></td>
  </tr>
    <tr>
    <td><p>Rw</p></td>
    <td><label for="rw"></label>
      <input type="text" name="rw" id="rw" /></td>
  </tr>
    <tr>
    <td><p>Kode Pos</p></td>
    <td><label for="kode_pos"></label>
      <input type="text" name="kode_pos" id="kode_pos" /></td>
  </tr>
  <tr>
  <td>Desa/Kelurahan</td>
    <td><label for="desa_kelurahan"></label>
      <input type="text" name="desa_kelurahan" id="desa_kelurahan" /></td>
  </tr>
  <tr>
  <td>Kecamatan</td>
    <td><label for="kecamatan"></label>
      <input type="text" name="kecamatan" id="kecamatan" /></td>
  </tr>
  <tr>
    <td>Kabupaten/Kota</td>
    <td><label for="kabupaten_kota"></label>
      <input type="text" name="kabupaten_kota" id="kabupaten_kota" /></td>
  </tr>
  <tr>
    <td>Provinsi</td>
    <td><label for="provinsi"></label>
      <input type="text" name="provinsi" id="provinsi" /></td>
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