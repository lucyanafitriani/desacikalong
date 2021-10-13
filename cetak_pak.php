<?php
  include("koneksi.php");
  $tampil=mysql_query("select * from pengantar_rt  where no_regis ='$no_regis'") or die (mysql_error());
  $data=mysql_fetch_array ($tampil);
	?>
<div style= "width:750px; min-height:500px; margin:0 auto; border:1px solid; padding:10px">	
<table width="100%" cellpadding="0" border="0">
<tr>

<td align="center"><b>RUKUN TETANGGA ... RUKUN WARGA..</b></td></tr>
<tr>
<td align="center"><b></b></td>
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
<h3 align="center"><u><b>SURAT KETERANGAN KEMATIAN</u>
<br>Nomor: </b></h3>
<table>
&emsp;
&ensp; Yang bertanda tangan di bawah ini Ketua RT. .... RW. .... Desa ................ Kecamatan ............... Kabupaten ................ dengan ini menerangkan bahwa:
<br>
<br>
<tr>
<td width="20%">No Regis Mati</td>
<td><?php echo $data['no_regis_mati']  ?></td>
</tr>
<td>Nama</td>
<td><?php echo $data ['nama'] ?></td>
</tr>
<tr>
<td> Tempat Lahir</td>
<td><?php echo $data ['tempat_lahir'] ?></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td><?php echo $data ['tgl_lahir'] ?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><?php echo $data ['jenis_kelamin'] ?></td>
</tr>
<tr>
<td>Pekerjaan</td>
<td><?php echo $data ['pekerjaan'] ?></td>
</tr>
<tr>
<td>Agama</td>
<td><?php echo $data ['agama'] ?></td>
</tr>
<tr>
<td>Status Perkawinan</td>
<td><?php echo $data['status_perkawinan'] ?></td>
</tr>
<tr>
<td>Kewarganegaraan</td>
<td><?php echo $data['kewarganegaraan'] ?></td>
</tr>
<tr>
<td>Alamat</td>
<td><?php echo $data['alamat'] ?></td>
</tr>
</table>
<p><br>
  &emsp;
  &ensp;Orang tersebut diatas, aalah benar-benar warga RT. .... RW. .... Desa ................. Kecamatan ................ Surat pengantar ini dibuat sebagai kelengkapan pengurusan <b> KTP (Kartu Tanda Penduduk)</b>. 
<p><br>
  &emsp;
  &ensp; Demikian Surat pengantar ini kami buat, untuk dapat dipergunakan sebagaimana mestinya.
</p>
<p>&nbsp;</p>
<table width="100%">
  <tr>
<td width="73%">&nbsp;</td>
<td width="27%" align="center">..............., .............</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">Ketua RT. .... RW. ....</td>
</tr>
<tr>
<td height="58">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center"><u>....................................</u></td>
</tr>
</table>
</div>