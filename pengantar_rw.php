<?php
session_start ();
$un=$_SESSION['ses_un_admin'];
?>
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
  <input type="hidden" name="hal" id="hal" value="rw" />
  <input type="text" name="crno_regis " value="<? echo $crno_regis?>" id="crno_regis"  placeholder="Cari No Regis"/>
   <input type="submit" name="c" id="c" value="Cari" />


<table width="100%
" border="1" id="customers">
  <tr>
    <th>Tool</th>
	<th>Pengajuan</th>
	<th>No Regis</th>
	<th>Id Admin</th>
	<th>Nama</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Jenis Kelamin</th>
	<th>Pekerjaan</th>
	<th>Agama</th>
	<th>Status Perkawinan</th>
	<th>Kewarganegaraan</th>
	<th>Alamat</th>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from pengantar_rw where no_regis like '%$crno_regis%' and id_admin='$un'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
    <td><a onClick="return confirm('Yakin?')" href="hapus_rw.php?no_regis=<?php echo $data['no_regis']?>" ><img src="img/dlt.png" width="35" height="35"> </a>
    <a href="?hal=edit_rw&no_regis=<?php echo $data['no_regis']?>"><img src="img/edt.png" width="35" height="35"> </a><a onClick="return confirm('Yakin?')" href="konfir_rw.php?no_regis=<?php echo $data['no_regis']?>" ><img src="img/centang.png" width="35" height="35"> </a>
	<a href="cetak_rw.php?no_regis=<?php echo $data['no_regis']?>" > Cetak</a></td>
	<td><?php echo $data['pengajuan'] ?></td>
	<td><?php echo $data['no_regis'] ?></td>
	<td><?php echo $data['id_admin'] ?></td>
	<td><?php echo $data['nama'] ?></td>
	<td><?php echo $data['tempat_lahir'] ?></td>
	<td><?php echo $data['tgl_lahir'] ?></td>
	<td><?php echo $data['jenis_kelamin'] ?></td>
	<td><?php echo $data['pekerjaan'] ?></td>
	<td><?php echo $data['agama'] ?></td>
	<td><?php echo $data['status_perkawinan'] ?></td>
	<td><?php echo $data['kewarganegaraan'] ?></td>
	<td><?php echo $data['alamat'] ?></td>
  <?php
  }
  ?>
</table>
</form>
<br />
<form action="simpan_rw.php" method="post">
<table width="100%" border="0">
	<tr>
      <td width="15%">No Regis</td>
    <td width="85%"><label for="no_regis"></label>
      <input type="text" name="no_regis" id="no_regis" /></td>
	</tr>
	<tr>
    <td><p>Nama</p></td>
    <td><label for="nama"></label>
      <input type="text" name="nama" id="nama" /></td>
  </tr>
      <tr>
    <td><p>Tempat Lahir</p></td>
    <td><label for="tempat_lahir"></label>
      <input type="text" name="tempat_lahir" id="tempat_lahir" /></td>
  </tr>
	  <tr>
    <td>Tanggal Lahir</td>
    <td><label for="tgl_lahir"></label>
      <input type="date" name="tgl_lahir" id="tgl_lahir" /></td>
  </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td><label for="jenis_kelamin"></label>
    <select name="jenis_kelamin" id="jenis_kelamin">
    <option> Laki-laki </option>
    <option> Perempuan </option>
    </select>
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
    <td>Status Perkawinan</td>
    <td><label for="status_perkawinan"></label>
    <select name="status_perkawinan" id="status_perkawinan">
    <option> Belum Kawin </option>
    <option> Kawin </option>
    </select>
    </td>
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
	<td>Alamat</td>
    <td><label for="alamat"></label>
      <input type="text" name="alamat" id="alamat" /></td>
  </tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
  </tr>
</table>
 </form>