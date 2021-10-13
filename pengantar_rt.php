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
  <input type="hidden" name="hal" id="hal" value="ktp" />
  <input type="text" name="crno_kk" value="<? echo $crno_kk?>" id="crno_kk"  placeholder="Cari No KK"/>
   <input type="submit" name="c" id="c" value="Cari" />

<table width="100%
" border="1" id="customers">
  <tr>
    <th>Tool</th>
	<th>No KK</th>
	<th>Status</th>
	<th>Pengajuan</th>
	<th>Nik</th>
	<th>Nama Lengkap</th>
	<th>Jenis Kelamin</th>
	<th>Gologan Darah</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Provinsi</th>
	<th>Pendidikan</th>
	<th>Status Kawin</th>
	<th>Agama</th>
	<th>Pekerjaan</th>
	<th>Alamat</th>
	<th>RT</th>
	<th>RW</th>
	<th>Kode Pos</th>
	<th>Kel/Desa</th>
	<th>Kec</th>
	<th>Kewarganegaraan</th>
	<th>Nama Ayah</th>
	<th>Nama Ibu</th>
	<th>Pengantar RT</th>
	<th>Pengantar RW</th>
  </tr>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from tabel_ktp  where no_kk like '%$crno_kk%'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
    <td><a onClick="return confirm('Yakin?')" href="hapus_ktp.php?no_kk=<?php echo $data['no_kk']?>" ><img src="img/dlt.png" width="35" height="35"> </a>
    <a href="?hal=edit_ktp&no_kk=<?php echo $data['no_kk']?>"><img src="img/edt.png" width="35" height="35"> </a>  <a onClick="return confirm('Yakin?')" href="konfir_ktp.php?no_kk=<?php echo $data['no_kk']?>" ><img src="img/centang.png" width="35" height="35"> </a> <a onClick="return confirm('Yakin?')" href="konf_lak_ktp.php?no_kk=<?php echo $data['no_kk']?>" ><img src="img/silang.jfif" width="35" height="35"> </a>
	<a href="cetak.php?no_kk=<?php echo $data['no_kk']?>" > Cetak</a></td>
	<td><?php echo $data['no_kk'] ?></td>
	<td><?php echo $data['status'] ?></td>
	<td><?php echo $data['pengajuan'] ?></td>
	<td><?php echo $data['nik'] ?></td>
	<td> <?php echo $data['nama_lengkap'] ?></td>
	<td> <?php echo $data['jenis_kelamin'] ?></td>
	<td> <?php echo $data['gol_darah'] ?></td>
	<td><?php echo $data['tempat_lahir'] ?></td>
	<td><?php echo $data['tanggal_lahir'] ?></td>
	<td> <?php echo $data['provinsi'] ?></td>
	<td> <?php echo $data['pendidikan'] ?></td>
	<td> <?php echo $data['status_kawin'] ?></td>
	<td> <?php echo $data['agama'] ?></td>
	<td> <?php echo $data['pekerjaan'] ?></td>
	<td><?php echo $data ['alamat'] ?></td>
	<td><?php echo $data ['rt'] ?></td>
	<td><?php echo $data ['rw'] ?></td>
	<td> <?php echo $data['kode_pos'] ?></td>
	<td><?php echo $data ['kel_desa'] ?></td>
	<td><?php echo $data ['kecamatan'] ?></td>
	<td><?php echo $data ['kewarganegaraan'] ?></td>
	<td> <?php echo $data['nama_ayah'] ?></td>
	<td> <?php echo $data['nama_ibu'] ?></td>
	<td><a href="pengantar/<?php echo $data ['pengantar_rt'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['pengantar_rt'] ?>" width="100" height="100"></a></td>
	<td><a href="pengantar/<?php echo $data ['pengantar_rw'] ?>" target="_blank"> <img src="pengantar/<?php echo $data ['pengantar_rw'] ?>" width="100" height="100"></a></td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
<br />
<form action="simpan_ktp.php" method="post" enctype="multipart/form-data">
<table width="100%" border="0">
  	<tr>
      <td width="15%">No KK</td>
    <td width="85%"><label for="no_kk"></label>
      <input type="text" name="no_kk" id="no_kk" /></td>
	</tr>
	 <tr>
    <td>Nik</td>
    <td><label for="nik"></label>
      <input type="text" name="nik" id="nik" /></td>
  </tr>
  	 <tr>
    <td>Nama Lengkap</td>
    <td><label for="nama_lengkap"></label>
      <input type="text" name="nama_lengkap" id="nama_lengkap" /></td>
  </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td><label for="jenis_kelamin"></label>
    <select name="jenis_kelamin" id="jenis_kelamin">
    <option> Pria </option>
    <option> Wanita </option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Golongan Darah</td>
    <td><label for="gol_darah"></label>
    <select name="gol_darah" id=gol_darah">
	<option> - </option>
    <option> O </option>
    <option> B </option>
	<option> A </option>
	<option> AB </option>
    </select>
    </td>
  </tr>
 <tr>
    <td>Tempat Lahir</td>
    <td><label for="tempat_lahir"></label>
      <input type="text" name="tempat_lahir" id="tempat_lahir" /></td>
  </tr>
   <tr>
    <td>Tanggal Lahir</td>
    <td><label for="tanggal_lahir"></label>
      <input type="date" name="tanggal_lahir" id="tanggal_lahir" /></td>
  </tr>
 <tr>
    <td>Provinsi</td>
    <td><label for="provinsi"></label>
      <input type="text" name="provinsi" id="provinsi" value="Jawa Barat" /></td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td><label for="pendidikan"></label>
      <input type="text" name="pendidikan" id="pendidikan" /></td>
  </tr>
   <tr>
    <td>Status Kawin</td>
    <td><label for="status_kawin"></label>
    <select name="status_kawin" id="status_kawin">
    <option> Belum Kawin </option>
    <option> Kawin </option>
    </select>
    </td>
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
    <td>Pekerjaan</td>
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
    <td><label for="alamat"></label>
      <input type="text" name="alamat" id="alamat" /></td>
  </tr>
    <tr>
   <td>RT</td>
   <td><label for="rt"></label>
   <input type="text" name="rt" id="rt" /></td>
</tr> 
  <tr>
   <td>RW</td>
   <td><label for="rw"></label>
   <input type="text" name="rw" id="rw" /></td>
</tr>
  <tr>
   <td>Kode Pos</td>
   <td><label for="kode_pos"></label>
   <input type="text" name="kode_pos" id="kode_pos" value="41384" /></td>
</tr>
<tr>
 <td>Kel/Desa</td>
 <td><label for="kel_desa"></label>
 <input type="text" name="kel_desa" id="kel_desa" value="Cikalong" /></td>
 </tr>
 <tr>
 <td>Kec</td>
 <td><label for="kecamatan"></label>
 <input type="text" name="kecamatan" id="kecamatan" value="Cilamaya Wetan" /></td>
 </tr>
  <tr>
    <td>Kewarganegaraan</td>
    <td><label for="kewarganegaraan"></label>
    <select name="kewarganegaraan" id="kewarganegaraan">
    <option> WNI </option>
    <option> WNA </option>
    <option> WNA Keturunan </option>
	</select>
    </td>
	</tr>
	<tr>
  <td>Nama Ayah</td>
    <td><label for="nama_ayah"></label>
      <input type="text" name="nama_ayah" id="nama_ayah" /></td>
  </tr>
  <tr>
  <td>Nama Ibu</td>
    <td><label for="nama_ibu"></label>
      <input type="text" name="nama_ibu" id="nama_ibu" /></td>
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