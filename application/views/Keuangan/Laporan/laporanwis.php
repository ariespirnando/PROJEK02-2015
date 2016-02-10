<a class="brand" href="<?php echo base_url()?>index.php/con_keuangan/laporanwis">Laporan Wisuda</a>

    <div class="span6 pull-right">
    <?php echo form_open("con_keuangan/laporanwis", 'class="navbar-form pull-right"'); ?>
      <select name="cari" class="chzn-select" style="width:180px;" tabindex="2">
         <option value="0">....Filter....</option>
         <option value='1'>Teknik Informatika</option>
         <option value='2'>Sistem Informasi</option>
      </select>
      <button type="submit" class="btn btn-primary" name="btCari"><i class="icon-search icon-white"></i> Filter</button>
    <?php echo form_close(); ?>
    </div>
    </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  
    <section>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No</th>
        <th>No Administrasi</th>
        <th>No Rekening</th>
        <th>Jurusan</th>
        <th>Tanggal Bayar</th>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Semester</th>
        <th>Periode</th>
        <th>Tahun Akademik</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $no=1+$this->uri->segment(3);
      foreach($data_wis->result() as $r)
      {
      echo "<tr>
        <td>$no</td>
        <td>$r->id_administrasi</td>
        <td>$r->No_rekening</td>
        <td>$r->namaJurusan</td>
        <td>$r->tanggalBayar</td>
        <td>$r->Npm</td>
        <td>$r->Nama</td>
        <td>$r->Semester</td>
        <td>$r->Periode</td>
        <td>$r->TahunAkademik</td>
      </tr>";
      $no++;
    }
    ?>
    </tbody>
  </table>
</section>
<?php
    echo $paging;
?>