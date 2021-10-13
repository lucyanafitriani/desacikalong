<?php
  include("koneksi.php");
  $tampil=mysql_query("select * from tabel_ktp  where no_ktp ='$no_ktp'") or die (mysql_error());
  $data=mysql_fetch_array ($tampil); 
	?>
<div style= "width:750px; min-height:500px; margin:0 auto; border:1px solid; padding:10px">	
<table width="100%" cellpadding="0" border="0">
<tr>
<td width="10" align="center" rowspan="5"><img src="img/krw.jpg" width="109" height="100"></td>

<td align="center"><b>PEMERINTAH KABUPATEN KARAWANG</b></td></tr>
<tr>
<td align="center"><b>KECAMATAN CILAMAYA WETAN</b></td>
</tr>
<tr>
<td align="center"><b>KEPALA DESA CIKALONG</b></td>
</tr>
<tr>
<td align="center"><b>Jl.Raya Krasak-Wadas Dsn.Krajan 1 Ds.Cikalong Kec.Cilamaya Wetan</b></td>
</tr>
<tr>
<td align="center"><b>KARAWANG</b></td>
</tr>
</table>
<hr>
<h3 align="center"><b><u>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP)</u></b></h3>
<table width="100%">
 <tr>
<td width="20%">No KTP</td>
<td width="5%">:</td>
<td width="75%"><?php echo $data['no_ktp']  ?></td>
</tr>
<tr>
<td>Nik</td>
<td>:</td>
<td><?php echo $data['nik'] ?></td>
</tr>
<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td><?php echo $data ['nama_lengkap'] ?></td>
</tr>
<tr>
<td>Jenis Kel</td>
<td>:</td>
<td><?php echo $data ['jenis_kelamin'] ?></td>
</tr>
<tr>
<td>Golongan Darah</td>
<td>:</td>
<td><?php echo $data ['gol_darah'] ?></td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td>:</td>
<td><?php echo $data ['tempat_lahir'] ?></td>
</tr>
<tr>
  <td>Tanggal Lahir</td>
  <td>:</td>
<td><?php echo $data ['tanggal_lahir'] ?></td>
</tr>
<tr>
<td>Provinsi</td>
<td>:</td>
<td><?php echo $data ['provinsi'] ?></td>
</tr>
<tr>
<td>Pendidikan</td>
<td>:</td>
<td><?php echo $data ['pendidikan'] ?></td>
</tr>
<tr>
<td>Status Kawin</td>
<td>:</td>
<td><?php echo $data ['status_kawin'] ?></td>
</tr>
<tr>
<td>Agama</td>
<td>:</td>
<td><?php echo $data ['agama'] ?></td>
</tr>
<tr>
<td>Pekerjaan</td>
<td>:</td>
<td><?php echo $data ['pekerjaan'] ?></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><?php echo $data ['alamat']  ?></td>
</tr>
<tr>
<td>RT</td>
<td>:</td>
<td><?php echo $data ['rt'] ?></td>
</tr>
<tr>
<td>RW</td>
<td>:</td>
<td><?php echo $data ['rw'] ?></td>
</tr>
<tr>
  <td>Kode Pos</td>
  <td>:</td>
<td><?php echo $data ['kode_pos'] ?></td>
</tr>
<tr>
<td>Kel/Desa</td>
<td>:</td>
<td><?php echo $data ['kel_desa'] ?></td>
</tr>
<tr>
<td>Kec</td>
<td>:</td>
<td><?php echo $data ['kecamatan'] ?></td>
</tr>
<tr>
<td>Kewarganegaraan</td>
<td>:</td>
<td><?php echo $data ['kewarganegaraan'] ?></td>
</tr>
<tr>
<td>Nama Ayah</td>
<td>:</td>
<td><?php echo $data ['nama_ayah'] ?></td>
</tr>
<tr>
<td>Nama Ibu</td>
<td>:</td>
<td><?php echo $data ['nama_ibu'] ?></td>
</tr>
</table>
<p>&nbsp;</p>
<table width="100%">
  <tr>
    <td width="54%" align="center">Specimen Tanda Tangan</td>
<td width="46%" align="center">&nbsp;</td>
</tr>
<tr>
  <td align="center">&nbsp;</td>
<td align="center">Pemohon, </td>
</tr>
<tr>
  <td align="center">&nbsp;</td>
<td height="58" align="center">&nbsp;</td>
</tr>
<tr>
  <td align="center">Ket : Cap Jempol / Tanda Tangan</td>
<td align="center">(<?php echo $data['nama_lengkap'] ?>)</td>
</tr>
</table> 
</div>