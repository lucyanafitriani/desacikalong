<?php
  include("koneksi.php");
  $tampil=mysql_query("select * from tabel_ktp  where no_kk ='$no_kk'") or die (mysql_error());
  $data=mysql_fetch_array ($tampil);
	?>
<div style= "width:750px; min-height:500px; margin:0 auto; border:1px solid; padding:10px">	
<table width="100%" cellpadding="0" border="0">
<tr>
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
<h3 align="center"><u><b>SURAT PENGANTAR</u></b>
<br>Nomor: </h3>
<br>
<table>
&emsp;
&ensp; Yang bertanda tangan di bawah ini Ketua RT. .... RW. .... Desa .................. Kecamatan .................... Kabupaten .................. dengan ini menerangkan bahwa:
<br>
<br>
<tr>
<td width="20%">No KK</td>
<td width="5%">:</td>
<td width="75%"><?php echo $data['no_kk']  ?></td>
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
<p><br>
  &emsp;
  &ensp; Orang tersebut diatas, adalah benar-benar warga RT. .... RW. .... Desa ........... Kecamatan .............. Kabupaten ............ Surat pengantar ini dibuat sebagai kelengkapan pengurusan <b>KTP (Kartu Tanda Penuduk).</b>
 </p>
<p><br>
  &emsp;
  &ensp; Demikian Surat Keterangan Kelahiran ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana mestinya.
</p>
<p>&nbsp;</p>
<table width="100%">
  <tr>
<td width="73%">&nbsp;</td>
<td width="27%" align="center">................., ...............</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">Ketua RT. ......RW. .....</td>
</tr>
<tr>
<td height="58">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center"><u>....................................</td></u>
</tr>
</table>
</div>