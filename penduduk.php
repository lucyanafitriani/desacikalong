
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
  <input type="hidden" name="hal" id="hal" value="penduduk" />
  <input type="text" name="crnik" value="<? echo $crnik?>" id="crnik"  placeholder="Cari NIK"/>
   <input type="submit" name="c" id="c" value="Cari" />


<table width="100%
" border="1" id="customers">
  <tr>
    <th>Tool</th>
	<th>Nik</th>
	<th>Nama</th>
	<th>Tempat Lahir</th>
	 <th>Tanggal lahir</th>
	<th>Nama Ibu</th>
	<th>Nama Ayah</th>
	<th>Agama</th>
	<th>Golongan Darah</th>
	<th>Jenis Kelamin</th>
    <th>Status</th>
    <th>Pekerjaan</th>
	<th>Alamat</th>
  </tr>
  <?php
  include("koneksi.php");
  $tampil=mysql_query("select * from data_penduduk  where nik like '%$crnik%'");
  while($data=mysql_fetch_array ($tampil)) {
	?>
  <tr>
    <td><a onClick="return confirm('Yakin?')" href="hapus_pen.php?nik=<?php echo $data['nik']?>" ><img src="img/dlt.png" width="35" height="35"> </a>
    <a href="?hal=editpen&nik=<?php echo $data['nik']?>"><img src="img/edt.png" width="35" height="35"> </a></td>
	<td><?php echo $data['nik'] ?></td>
	<td><?php echo $data['nama'] ?></td>
	<td><?php echo $data['tem_lahir'] ?></td>
    <td><?php echo $data ['tgl_lahir'] ?></td>
	<td><?php echo $data ['nama_ibu'] ?></td>
	<td><?php echo $data ['nama_ayah'] ?></td>
	<td><?php echo $data ['agama'] ?></td>
	<td><?php echo $data ['gdr'] ?></td>
	<td><?php echo $data ['jk'] ?></td>
    <td><?php echo $data ['status'] ?></td>
    <td><?php echo $data ['pekerjaan'] ?></td>
	<td><?php echo $data ['alamat'] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
<br />
<form action="simpan_penduduk.php" method="post">
<table width="100%" border="0">
  <tr>
    <td>Nik</td>
    <td><label for="nik"></label>
      <input type="text" name="nik" id="nik" /></td>
  </tr>
	<tr>
      <td width="15%">Nama</td>
    <td width="85%"><label for="nama"></label>
      <input type="text" name="nama" id="nama" /></td>
	</tr>
	 <tr>
    <td width="15%">Tempat Lahir</td>
    <td width="85%"><label for="tem_lahir"></label>
      <input type="text" name="tem_lahir" id="tem_lahir" /></td>
  </tr>
    <tr>
    <td><p>Tanggal Lahir</p></td>
    <td><label for="tgl_lahir"></label>
      <input type="date" name="tgl_lahir" id="tgl_lahir" /></td>
  </tr>
  <tr>
    <td width="15%">Nama Ibu</td>
    <td width="85%"><label for="nama_ibu"></label>
      <input type="text" name="nama_ibu" id="nama_ibu" /></td>
  </tr>
    <tr>
    <td width="15%">Nama Ayah</td>
    <td width="85%"><label for="nama_ayah"></label>
      <input type="text" name="nama_ayah" id="nama_ayah" /></td>
  </tr>
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
    <td>Golongan Darah</td>
    <td><label for="gdr"></label>
    <select name="gdr" id=gdr">
	<option> - </option>
    <option> O </option>
    <option> B </option>
	<option> A </option>
	<option> AB </option>
    </select>
    </td>
  </tr>
    <td>Jenis Kelamin</td>
    <td><label for="jk"></label>
    <select name="jk" id="jk">
    <option> Laki-laki </option>
    <option> Perempuan </option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Status</td>
    <td><label for="status"></label>
    <select name="status" id="status">
    <option> Belum Kawin </option>
    <option> Kawin </option>
    </select>
    </td>
  </tr>
  <tr>
  <td>Pekerjaan</td>
    <td><label for="pekerjaan"></label>
      <input type="text" name="pekerjaan" id="pekerjaan" /></td>
  </tr>
  <td>Alamat</td>
    <td><label for="alamat"></label>
      <input type="text" name="alamat" id="alamat" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
  </tr>
</table>
 </form>