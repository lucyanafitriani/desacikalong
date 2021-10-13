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
  <input type="hidden" name="hal" id="hal" value="akel" />
  <input type="text" name="crno_lahir " value="<? echo $crno_lahir?>" id="crno_lahir"  placeholder="Cari No Lahir"/>
   <input type="submit" name="c" id="c" value="Cari" />


<table width="100%
" border="1" id="customers">
  <tr>
    <th>Tool</th>
	<th>No Lahir</th>
	<th>Hari</th>
	<th>Pukul</th>
	<th>Tanggal Lahir</th>
	<th>Tempat Lahir</th>
	<th>Telah Lahir Seorang Anak</th>
	<th>Bernama</th>
	<th>Dari Seorang Ibu</th>
	<th>Nama Ibu</th>
	<th>Nik</th>
	<th>Umur</th>
	<th>Pekerjaan Ibu</th>
	<th>Alamat</th>
	<th>Nama Ayah</th>
	<th>Nik</th>
	<th>Umur</th>
	<th>Pekerjaan Ayah</th>
	<th>Alamat</th>
	<th>Nama Pelapor</th>
	<th>NIK</th>
	<th>Umur</th>
	<th>Pekerjaan</th>
	<th>Alamat</th>
	<th>Hubungan Pelapor Dengan Bayi</th>
	<th>Pengantar RT</th>
	<th>Pengantar RW</th>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from akta_kelahiran where no_lahir like '%$crno_lahir%'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
    <td><a onClick="return confirm('Yakin?')" href="hapus_akel.php?no_lahir=<?php echo $data['no_lahir']?>" ><img src="img/dlt.png" width="35" height="35"> </a>
    <a href="?hal=editakel&no_lahir=<?php echo $data['no_lahir']?>"><img src="img/edt.png" width="35" height="35"> </a>
	<a href="cetak_akel.php?no_lahir=<?php echo $data['no_lahir']?>" > Cetak</a></td>
	<td><?php echo $data['no_lahir'] ?></td>
	<td><?php echo $data['hari'] ?></td>
	<td><?php echo $data['pukul'] ?></td>
	<td><?php echo $data['tgl_lahir'] ?></td>
	<td><?php echo $data['tmpt_lahir'] ?></td>
	<td><?php echo $data['tel_lah_anak'] ?></td>
	<td><?php echo $data['bernama'] ?></td>
	<td><?php echo $data['dr_seor_ibu'] ?></td>
	<td><?php echo $data['nm_ibu'] ?></td>
	<td><?php echo $data['nik_ibu'] ?></td>
	<td><?php echo $data['umur_ibu'] ?></td>
	<td><?php echo $data['pekerjaan'] ?></td>
	<td><?php echo $data['alamat_ibu'] ?></td>
	<td><?php echo $data['nama_ayah'] ?></td>
	<td><?php echo $data['nik_ayah'] ?></td>
	<td><?php echo $data['umur_ayah'] ?></td>
	<td><?php echo $data['pekerjaan_ayah'] ?></td>
	<td><?php echo $data['Alamat_ayah'] ?></td>
	<td><?php echo $data['nm_pelapor'] ?></td>
	<td><?php echo $data['nik_pel'] ?></td>
	<td><?php echo $data['umur_pel'] ?></td>
	<td><?php echo $data['pekerjaan_pel'] ?></td>
	<td><?php echo $data['alamat_pel'] ?></td>
	<td><?php echo $data['hub_pel_bayi'] ?></td>
<td><a href="pengantar/<?php echo $data ['pengantar_rt'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['pengantar_rt'] ?>" width="100" height="100"></a></td>
	<td><a href="pengantar/<?php echo $data ['pengantar_rw'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['pengantar_rw'] ?>" width="100" height="100"></a></td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
<br />
<form action="simpan_akel.php" method="post">
<table width="100%" border="0">
	<tr>
      <td width="15%">No Lahir</td>
    <td width="85%"><label for="no_lahir"></label>
      <input type="text" name="no_lahir" id="no_lahir" /></td>
	</tr>
	<tr>
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
    </select>
    </td>
  </tr>
      <tr>
    <td><p>Pukul</p></td>
    <td><label for="pukul"></label>
      <input type="time" name="pukul" id="pukul" /></td>
  </tr>
	  <tr>
    <td>Tanggal Lahir Anak</td>
    <td><label for="tgl_lahir"></label>
      <input type="date" name="tgl_lahir" id="tgl_lahir" /></td>
  </tr>
  	<tr>
    <td><p>Tempat Lahir</p></td>
    <td><label for="tmpt_lahir"></label>
      <input type="text" name="tmpt_lahir" id="tmpt_lahir" /></td>
  </tr>
  <tr>
    <td>Telah Lahir Sorang Anak</td>
    <td><label for="tel_lah_anak"></label>
    <select name="tel_lah_anak" id="tel_lah_anak">
    <option> Laki-laki </option>
    <option> Perempuan </option>
    </select>
    </td>
  </tr>
  <tr>
    <td><p>Bernama</p></td>
    <td><label for="bernama"></label>
      <input type="text" name="bernama" id="bernama" /></td>
  </tr>
  	 <tr>
    <td>Dari Seorang Ibu</td>
    <td><label for="dr_seor_ibu"></label>
      <input type="text" name="dr_seor_ibu" id="dr_seor_ibu" /></td>
  </tr>
  	 <tr>
    <td>Nama Ibu</td>
    <td><label for="nm_ibu"></label>
      <input type="text" name="nm_ibu" id="nm_ibu" /></td>
  </tr>
  <tr>
    <td>NIK</td>
    <td><label for="nik_ibu"></label>
      <input type="text" name="nik_ibu" id="nik_ibu" /></td>
  </tr>
   <tr>
    <td>Umur</td>
    <td><label for="umur_ibu"></label>
      <input type="text" name="umur_ibu" id="umur_ibu" /></td>
  </tr>
      <td>Pekerjaan Ibu</td>
    <td><label for="pekerjaan"></label>
    <select name="pekerjaan" id="pekerjaan">
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
    <td>Alamat</td>
    <td><label for="alamat_ibu"></label>
      <input type="text" name="alamat_ibu" id="alamat_ibu" /></td>
  </tr>
  	 <tr>
    <td>Nama Ayah</td>
    <td><label for="nama_ayah"></label>
      <input type="text" name="nama_ayah" id="nama_ayah" /></td>
  </tr>
  <tr>
    <td>Nik</td>
    <td><label for="nik_ayah"></label>
      <input type="text" name="nik_ayah" id="nik_ayah" /></td>
  </tr>
  <tr>
    <td>Umur</td>
    <td><label for="umur_ayah"></label>
      <input type="text" name="umur_ayah" id="umur_ayah" /></td>
  </tr>
  <tr>
    <td>Pekerjaan Ayah</td>
    <td><label for="pekerjaan_ayah"></label>
    <select name="pekerjaan_ayah" id="pekerjaan_ayah">
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
    <td>Alamat</td>
    <td><label for="Alamat_ayah"></label>
      <input type="text" name="Alamat_ayah" id="Alamat_ayah" /></td>
  </tr>
 <tr>
    <td>Nama Pelapor</td>
    <td><label for="nm_pelapor"></label>
      <input type="text" name="nm_pelapor" id="nm_pelapor" /></td>
  </tr>
 <tr>
    <td>NIK</td>
    <td><label for="nik_pel"></label>
      <input type="text" name="nik_pel" id="nik_pel" /></td>
  </tr>
    <tr>
    <td>Umur</td>
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
    <td>Alamat</td>
    <td><label for="alamat_pel"></label>
      <input type="text" name="alamat_pel" id="alamat_pel" /></td>
  </tr>
	<tr>
	<td>Hubungan Pelapor Dengan Bayi</td>
    <td><label for="hub_pel_bayi"></label>
    <select name="hub_pel_bayi" id="hub_pel_bayi">
    <option> Ibu </option>
    <option> Ayah </option>
	<option> Saudara </option>
	<option> Kakek </option>
	<option> Nenek </option>
	<option> Paman </option>
	<option> Bibi </option>
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
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
  </tr>
</table>
 </form>