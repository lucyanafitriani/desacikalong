<?php
  include("koneksi.php");
  $tampil=mysql_query("select * from header_kk  where no_pengajuan='$no_pengajuan'") or die (mysql_error());
  $data=mysql_fetch_array ($tampil);
	?>
<table width="100%" border="0" align="center" cellpadding="0">
  <tr>
<td width="10" align="center" rowspan="5"><img src="img/krw.jpg" width="117" height="100"></td>

<td align="center"><strong>PEMERINTAH KABUPATEN KARAWANG</strong></td></tr>
<tr>
<td align="center"><strong><u>FORMULIR PERMOHONAN KARTU KELUARGA (KK)</u></strong></td>
</tr>
<tr>
<td align="center"><strong>No. Formulir :................................</strong></td>
</tr>
<tr>
<td align="center"><strong>Tanggal :..................................</strong></td>
</tr>
<tr>
<td align="center">&nbsp;</td>
</tr>
</table>
<p>&nbsp;</p>
<table width="17%" border="0" align="right" cellpadding="0">
  <tr>
    <td align="center"><div align="justify">Nama Pemohon : <?php echo $data['nm_pem'] ?></div></td>
  </tr>
  <tr>
    <td align="center"><div align="justify">Nama Kepala Keluarga : <?php echo $data['nm_kep'] ?></div></td>
  </tr>
  <tr>
    <td align="center"><div align="justify">Alamat : <?php echo $data['alamat'] ?> </div></td>
  </tr>
  <tr>
    <td align="center"><div align="justify">RT : <?php echo $data['rt'] ?></div></td>
  </tr>
    <tr>
    <td align="center"><div align="justify">RW : <?php echo $data['rw'] ?></div></td>
  </tr>
</table>
<table width="17%" border="0" cellpadding="0">
  <tr>
    <td align="center"><div align="justify">Provinsi : <?php echo $data['provinsi'] ?></div></td>
  </tr>
  <tr>
    <td align="center"><div align="justify">Kabupaten/Kota : <?php echo $data['kabupaten_kota'] ?></div></td>
  </tr>
  <tr>
    <td align="center"><div align="justify">Kecamatan : <?php echo $data['kecamatan']?></div></td>
  </tr>
  <tr>
    <td align="center"><div align="justify">Kelurahan/Desa : <?php echo $data['desa_kelurahan']?></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="1410" border="1">
  <tr>
    <td width="40" rowspan="2"><div align="center">No Urut</div></td>
    <td width="331" rowspan="2"><div align="center">Nama Lengkap</div></td>
    <td width="192" rowspan="2"><div align="center">NIK</div></td>
    <td height="27" colspan="2"><div align="center">Kelahiran</div></td>
    <td width="118" rowspan="2"><div align="center">Jenis Kelamin</div></td>
    <td colspan="1"><div align="center">Kewarganegaaan</div></td>
    <td width="50" rowspan="2"><div align="center">Gol Darah
    </div>      <div align="center"></div></td>
  </tr>
  
  <tr>
    <td height="54"><div align="center">Tempat</div></td>
    <td><div align="center">Tanggal/Bulan/Taun</div></td>
    <td width="117"><div align="center">WNI/WNA</div></td>
 
    <?php
	$no=1;
  include("koneksi.php");
  $tampil=mysql_query("select * from data_kk where no_pengajuan='$no_pengajuan'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
    <td><div align="center"> <?php echo $no?></div></td>
    <td><div align="center"> <?php echo $data ['nm_lengkap'] ?></div></td>
    <td><div align="center"> <?php echo $data['nik'] ?></div></td>
    <td width="117"><div align="center"> <?php echo $data['tempat_lahir'] ?></div></td>
    <td width="168"><div align="center"> <?php echo $data['tanggal_lahir'] ?></div></td>
    <td><div align="center"><?php echo $data['jenis_kelamin'] ?></div></td>
    <td><div align="center"> <?php echo $data['kewarganegaraan'] ?></div></td>
    <td><div align="center"><?php echo $data['gol_darah'] ?></div></td>
  </tr>
  <?
  $no++;
  }
  ?> 
</table>
<align="left">&nbsp;
&nbsp;
<table width="1410" border="1">
  <tr>
    <td width="40" rowspan="2"><div align="center">No Urut</div></td>
    <td width="331" rowspan="2"><div align="center">Agama</div></td>
    <td width="192" rowspan="2"><div align="center">Status Perkawinan</div></td>
	 <td width="192" rowspan="2"><div align="center">Pendidikan</div></td>
    <td width="118" rowspan="2"><div align="center">Pekerjaan</div></td>
     <td width="192" rowspan="2"><div align="center">Hubungan Dengan Kepala Keluarga</div></td>
    <td height="27" colspan="2"><div align="center">Nama Orang Tua</div></td>    
  </tr>
  
    </div>      <div align="center"></div></td>
  </tr> 
  <tr>
    <td height="54"><div align="center">Ayah</div></td>
    <td><div align="center">Ibu</div></td>

   <?php
	$no=1;
  include("koneksi.php");
  $tampil=mysql_query("select * from data_kk where no_pengajuan='$no_pengajuan'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
    <td><div align="center"> <?php echo $no?></div></td>
    <td><div align="center"> <?php echo $data ['agama'] ?></div></td>
    <td><div align="center"> <?php echo $data['status_perkawinan'] ?></div></td>
    <td><div align="center"> <?php echo $data['pendidikan'] ?></div></td>
    <td><div align="center"><?php echo $data['pekerjaan'] ?></div></td>
	<td><div align="center"> <?php echo $data['hub_kep'] ?></div></td>
    <td width="117"><div align="center"> <?php echo $data['nm_ayah'] ?></div></td>
    <td width="168"><div align="center"> <?php echo $data['nm_ibu'] ?></div></td>

  </tr>
  <?
  $no++;
  }
  ?>  
</table>
<p align="left">&nbsp;</p>