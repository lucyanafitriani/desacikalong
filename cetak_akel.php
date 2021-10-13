<?php
  include("koneksi.php");
  $tampil=mysql_query("select * from akta_kelahiran  where no_lahir ='$no_lahir'") or die (mysql_error());
  $data=mysql_fetch_array ($tampil);
	?>
<div style= "width:750px; min-height:500px; margin:0 auto; border:1px solid; padding:10px">	
<table width="100%" cellpadding="0" border="0">
<tr>
<td width="10" align="center" rowspan="5"><img src="img/krw.jpg" width="117" height="100"></td>

<td align="center">PEMERINTAH KABUPATEN KARAWANG</td></tr>
<tr>
<td align="center">KECAMATAN CILAMAYA WETAN</td>
</tr>
<tr>
<td align="center">KEPALA DESA CIKALONG</td>
</tr>
<tr>
<td align="center">Jl.Raya Krasak-Wadas Dsn.Krajan 1 Ds.Cikalong Kec.Cilamaya Wetan</td>
</tr>
<tr>
<td align="center">KARAWANG</td>
</tr>
</table>
<hr>
<h3 align="center"><u>Surat Keterangan Kelahiran</u>
<br>Nomor: </h3>
<table width="100%">
&emsp;
&ensp; Yang bertanda tangan di bawah ini, menerangkan bahwa:
<br>
<tr>
<td width="28%">No Surat Lahir</td>
<td width="4%">:</td>
<td width="17%"><?php echo $data['no_lahir']  ?></td>
<td width="51%">&nbsp;</td>
</tr>
<tr>
  <td>Hari</td>
  <td>:</td>
<td><?php echo $data ['hari'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td> Pukul</td>
<td>:</td>
<td><?php echo $data ['pukul'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td><?php echo $data ['tgl_lahir'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td>:</td>
<td><?php echo $data ['tmpt_lahir'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Telahir lahir seorang anak</td>
<td>:</td>
<td><?php echo $data ['tel_lah_anak'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Bernama</td>
<td>:</td>
<td><?php echo $data ['bernama'] ?></td>
<td>&nbsp;</td>
</tr>
<table>
<br>
&emsp;
&ensp; Dari seorang ibu :
<br>
<tr>
<td width="28%">Nama Lengkap</td>
<td width="4%">:</td>
<td width="17%"><?php echo $data['nm_ibu']  ?></td>
<td width="51%">&nbsp;</td>
</tr>
<tr>
<td>Nik</td>
<td>:</td>
<td><?php echo $data['nik_ibu'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Umur</td>
<td>:</td>
<td><?php echo $data ['umur_ibu'] ?> Tahun</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Pekerjaan</td>
<td>:</td>
<td><?php echo $data ['pekerjaan'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><?php echo $data['alamat_ibu'] ?></td>
<td>&nbsp;</td>
</tr>
</table>
<table>
<br>
&emsp;
&ensp; Istri dari :
<br>
<tr>
<td width="28%">Nama Lengkap</td>
<td width="4%">:</td>
<td width="17%"><?php echo $data['nama_ayah']  ?></td>
<td width="51%">&nbsp;</td>
</tr>
<tr>
<td>Nik</td>
<td>:</td>
<td><?php echo $data['nik_ayah'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Umur</td>
<td>:</td>
<td><?php echo $data['umur_ayah'] ?> Tahun</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Pekerjaan</td>
<td>:</td>
<td><?php echo $data['pekerjaan_ayah'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><?php echo $data['Alamat_ayah'] ?></td>
<td>&nbsp;</td>
</tr>
</table>
<table>
<br>
&emsp;
&ensp; Surat keterangan ini dibuat berdasaran keterangan Pelapor :
<br>
<tr>
<td width="28%">Nama Lengkap</td>
<td width="4%">:</td>
<td width="17%"><?php echo $data['nm_pelapor']  ?></td>
<td width="51%">&nbsp;</td>
</tr>
<tr>
<td>Nik</td>
<td>:</td>
<td><?php echo $data['nik_pel'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Umur</td>
<td>:</td>
<td><?php echo $data['umur_pel'] ?> Tahun</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Pekerjaan</td>
<td>:</td>
<td><?php echo $data['pekerjaan_pel'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><?php echo $data ['alamat_pel'] ?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Hubungan Pelapor Dengan Bayi </td>
<td>:</td>
<td><?php echo $data['hub_pel_bayi'] ?></td>
<td>&nbsp;</td>
</tr>
</table>
</table>
<p><br>
  &emsp;
  &ensp; Demikian Surat Keterangan Kelahiran ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana mestinya.
</p>
<p>&nbsp;</p>
<table width="100%">
  <tr>
<td width="73%">&nbsp;</td>
<td width="27%" align="center">...................20.......</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">Kepala Desa/Lurah</td>
</tr>
<tr>
<td height="58">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">....................................</td>
</tr>
</table>
</div>