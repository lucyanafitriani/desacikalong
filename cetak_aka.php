<?php
  include("koneksi.php");
  $tampil=mysql_query("select * from akta_kematian  where no_mati ='$no_mati'") or die (mysql_error());
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
<h3 align="center"><u><b>SURAT KETERANGAN KEMATIAN</b></u>
<br>Nomor: </h3>
<br>
<table width="100%">
&emsp;
&ensp; Yang bertanda tangan di bawah ini, menerangkan bahwa :
<br>
<br>
<tr>
<td width="28%">No Surat Kematian</td>
<td width="2%">:</td>
<td width="20%"><?php echo $data['no_mati']  ?></td>
<td width="50%">&nbsp;</td>
</tr>
<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td><?php echo $data['nama_lengkap'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td> Nik</td>
<td>:</td>
<td><?php echo $data ['nik'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
  <td>Jenis Kelamin</td>
  <td>:</td>
<td><?php echo $data ['jenis_kelamin'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td>:</td>
<td><?php echo $data ['tempat_lahir'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td><?php echo $data ['tgl_lahir']  ?> </td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Umur</td>
<td>:</td>
<td><?php echo $data ['umur'] ?> Tahun</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Agama</td>
<td>:</td>
<td><?php echo $data ['agama'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><?php echo $data ['alamat'] ?></td>
<td>&nbsp;</td>
</tr>
</table>
<br>
<table width="100%">
&emsp;
&ensp;Telah meninggal dunia pada :
<br>
<br>
<tr>
<td width="28%">Hari</td>
<td width="2%">:</td>
<td width="70%"><?php echo $data ['hari'] ?></td>
</tr>
<tr>
<td>Tanggal Meninggal</td>
<td>:</td>
<td><?php echo $data ['tgl_meninggal'] ?></td>
</tr>
<tr>
<td>Penyebab Kematian</td>
<td>:</td>
<td><?php echo $data ['peny_kematian'] ?></td>
</tr>
</table>
<br>
<table width="100%">
&emsp;
&ensp;Surat keterangan ini dibuat berdasarkan keterangan pelapor :
<br>
<br>
<tr>
<td width="28%">Nama Lengkap</td>
<td width="2%">:</td>
<td width="28%"><?php echo $data ['nm_pelapor'] ?></td>
<td width="42%">&nbsp;</td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td>:</td>
<td><?php echo $data ['tmp_lah_pel'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td><?php echo $data ['tgl_lah_pel'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Umur</td>
<td>:</td>
<td><?php echo $data ['umur_pel'] ?> Tahun</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Pekerjaan</td>
<td>:</td>
<td><?php echo $data ['pekerjaan_pel'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td height="21">Alamat</td>
<td>:</td>
<td><?php echo $data ['alamat_pel'] ?></td>
<td>&nbsp;</td>
</tr>
</table>
<br>
<table width="100%">
<tr>
<td width="28%">Hubungan Pelapor</td>
<td width="2%">:</td>
<td width="70%"><?php echo $data ['hub_pelapor'] ?></td>
</tr>
</table>
</table>
<p>&nbsp;</p>
<table width="91%">
  <tr>
<td width="60%">&nbsp;</td>
<td width="40%" align="center">Cikalong, .................. 20.....</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">KEPALA DESA CIKALONG</td>
</tr>
<tr>
<td height="58">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center"><b><u>....................................</u></b></td>
</tr>
</table>
</div>