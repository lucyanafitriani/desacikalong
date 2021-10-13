<div style= "width:1000px; min-height:500px; margin:0 auto; border:1px solid; padding:10px">	
<table width="100%" cellpadding="0" border="0">
<td width="10" align="center" rowspan="5"><img src="img/krw.jpg" width="117" height="100"></td>
<td align="center"><b>PEMERINTAH KABUPATEN KARAWANG</td></tr></b>
<tr>
<td align="center"><b>KECAMATAN CILAMAYA WETAN</td><b>
</tr>
<tr>
<td align="center"><b>KEPALA DESA CIKALONG</td></b>
</tr>
<tr>
<td align="center"><b>Jl.Raya Krasak-Wadas Dsn.Krajan 1 Ds.Cikalong Kec.Cilamaya Wetan</td></b>
</tr>
<tr>
<td align="center"><b>KARAWANG</td></b>
</tr>
</table>
<hr>
<h3 align="center"><u><b>LAPORAN</u></b></h3>
<h3 align="left"><b>LAPORAN KTP</b><h3>
<table width="100%
" border="1" id="customers">
	<th>No KTP</th>
	<th>Tanggal Pengajuan</th>
	<th>Nik</th>
	<th>Nama Lengkap</th>
	<th>Jenis Kelamin</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Alamat</th>
	<th>RT</th>
	<th>RW</th>
  </tr>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from tabel_ktp  where tgl_pengajuan between '$tgl_1' and '$tgl_2'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
	<td><?php echo $data['no_ktp'] ?></td>
	<td><?php echo $data['tgl_pengajuan'] ?></td>
	<td><?php echo $data['nik'] ?></td>
	<td> <?php echo $data['nama_lengkap'] ?></td>
	<td> <?php echo $data['jenis_kelamin'] ?></td>
	<td><?php echo $data['tempat_lahir'] ?></td>
	<td><?php echo $data['tanggal_lahir'] ?></td>
	<td><?php echo $data ['alamat'] ?></td>
	<td><?php echo $data ['rt'] ?></td>
	<td><?php echo $data ['rw'] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<h3 align="left"><b>LAPORAN KK</b><h3>
<table width="100%
" border="1" id="customers">
  <tr>
	<th>No Pengajuan</th>
	<th>Tanggal Pengajuan</th>
	<th>Nama Pemohon</th>
	<th>Nama Kepala Kel</th>
	<th>Nama Lengkap</th>
	<th>NIK</th>
	<th>kewarganegaraan</th>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from data_kk where tgl_pengajuan between '$tgl_1' and '$tgl_2'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
	<td><?php echo $data['no_pengajuan'] ?></td>
	<td><?php echo $data['tgl_pengajuan'] ?></td>
	<td><?php echo $data['nm_pem'] ?></td>
	<td><?php echo $data['nm_kep_kel'] ?></td>
	<td><?php echo $data['nm_lengkap'] ?></td>
	<td><?php echo $data['nik'] ?></td>
	<td><?php echo $data['kewarganegaraan'] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<h3 align="left"><b>LAPORAN KELAHIRAN</b><h3>
<table width="100%
" border="1" id="customers">
  <tr>
	<th>No Lahir</th>
	<th>Tanggal Pengajuan</th>
	<th>Hari</th>
	<th>Tanggal Lahir</th>
	<th>Tempat Lahir</th>
	<th>Nama Ibu</th>
	<th>Nik</th>
	<th>Nama Ayah</th>
	<th>Nik</th>
	<th>Nama Pelapor</th>
	<th>NIK</th>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from akta_kelahiran  where tgl_pengajuan between '$tgl_1' and '$tgl_2'");
  while($data=mysql_fetch_array ($tampil)) {
	?> 
  <tr>
	<td><?php echo $data['no_lahir'] ?></td>
	<td><?php echo $data['tgl_pengajuan'] ?></td>
	<td><?php echo $data['hari'] ?></td>
	<td><?php echo $data['tgl_lahir'] ?></td>
	<td><?php echo $data['tmpt_lahir'] ?></td>
	<td><?php echo $data['nm_ibu'] ?></td>
	<td><?php echo $data['nik_ibu'] ?></td>
	<td><?php echo $data['nama_ayah'] ?></td>
	<td><?php echo $data['nik_ayah'] ?></td>
	<td><?php echo $data['nm_pelapor'] ?></td>
	<td><?php echo $data['nik_pel'] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<h3 align="left"><b>LAPORAN KEMATIAN</b><h3>
<table width="100%
" border="1" id="customers">
  <tr>
	<th>No Surat Kemtian</th>
	<th>Tanggal Pengajuan</th>
    <th>Nama</th>
	<th>NIK</th>
	<th>Tempat Meninggal</th>
	<th>Tanggal Meninggal</th>
	<th>Tanggal Meninggal</th>
	<th>Penyebab Kematian</th>
	<th>Nama Pelapor</th>
	<th>Hubungan Pelapor</th>
  </tr>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from akta_kematian where tgl_pengajuan between '$tgl_1' and '$tgl_2'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
	<td><?php echo $data['no_mati'] ?></td>
	<td><?php echo $data['tgl_pengajuan'] ?></td>
	<td><?php echo $data['nama_lengkap'] ?></td>
	<td><?php echo $data['nik'] ?></td>
	<td><?php echo $data['tempat_lahir']?></td>
	<td><?php echo $data['tgl_lahir'] ?></td>
	<td><?php echo $data['tgl_meninggal'] ?></td>
	<td><?php echo $data['peny_kematian'] ?></td>
	<td><?php echo $data['nm_pelapor'] ?></td>
	<td><?php echo $data['hub_pelapor'] ?></td>
  </tr>
  <?php
  }
  ?>
</table>