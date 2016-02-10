<a class="brand" href="#">Cetak Pendaftaran</a>

<div class="navbar-form pull-right">
  <a class="btn btn-danger btn-sm" href="#" onclick="printContent('cetakdok')">
    <i class="icon-print icon-white"></i>Cetak</a>
</div>

  </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->


<div id="cetakdok" align="center"><h2>
  <center>
  <p>Bukti Pendaftaran dan Peminjaman Toga<br>
    SIPYuda<br>
    (Sistem Informasi Pendaftaran Yudisium Atau Wisuda) <br>
</p></center>
  <p>&nbsp;</p>
</h2>
<div align="center" class="table-responsive">
<table width="68%" border="1">
  <tr>
  <td>
  <table width="100%">
  <tr>
    <td width="35%" rowspan="11" align="center"><img class="image" src="<?php echo base_url(); ?>assets/Upload/<?php echo $cetak['foto_wisuda']; ?>" width="183" height="285"></td>
    <td width="30%" height="23"><strong>No Administrasi</strong></td>
    <td width="35%"><?php echo $cetak['id_administrasi']; ?></td>
  </tr>
  <tr>
    <td><strong>NPM</strong></td>
    <td><?php echo $cetak['NPM']; ?></td>
  </tr>
  <tr>
    <td><strong>Nama Mahasiswa</strong></td>
    <td><?php echo $cetak['nama']; ?></td>
  </tr>
  <tr>
    <td><strong>Jurusan</strong></td>
    <td><?php echo $cetak['namaJurusan']; ?></td>
  </tr>
  <tr>
    <td><strong>Fakultas</strong></td>
    <td><?php echo$cetak['namaFakultas']; ?></td>
  </tr>
  <tr>
    <td><strong>Tahun Akademik</strong></td>
    <td><?php echo $cetak['TahunAkademik']; ?></td>
  </tr>
  <tr>
    <td><strong>Periode Pendaftaran</strong></td>
    <td><?php echo $cetak['Periode']; ?></td>
  </tr>
  <tr>
    <td height="28"><strong>Nomor Kursi</strong></td>
    <td><?php echo $cetak['No_Kursi']; ?></td>
  </tr>
  <tr>
    <td><strong>Ukuran Toga</strong></td>
    <td height="28"><?php echo $cetak['Ukuran_toga']; ?></td>
  </tr>
  <tr>
    <td><strong>Tanggal Peminjaman Toga</strong></td>
    <td height="28"><?php echo $cetak['tgl_peminjaman']; ?></td>
    
  </tr>
  <tr>
    <td><strong>Tanggal Pemulangan Toga</strong></td>
    <td height="28"><?php echo $cetak['tgl_pemulangan']; ?></td>
  </tr>
</table>
  </td>
  </tr>
</table>
<table width="68%">
<tr>
	<td width="71%"><p>&nbsp;</p>
	  <p>&nbsp;</p></td>
    <td width="29%"><p>&nbsp;</p>
      <p>Mengetahui,</p>
      <p>&nbsp;</p>
      <p>BAAKU Stmik Teknokrat</p></td>
</tr>
</table>
</div>
</div>
