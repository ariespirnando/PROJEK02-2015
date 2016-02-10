<a class="brand" href="#">Laporan Pendaftaran Sistem Informasi</a>

    <div class="span6 pull-right">
    <?php echo form_open("con_baaku/laporanSI", 'class="navbar-form pull-right"'); ?>
      <select name="cari" class="chzn-select" style="width:180px;" tabindex="2">
        <option value=0>....Filter....</option>
        <option value=1>Yudisium 1</option>
        <option value=2>Yudisium 2</option>
        <option value=3>Yudisium 3</option>
        <option value=4>Wisuda</option>
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
        <th>NPM</th>
        <th>Nama</th>
        <th>Jurusan</th> 
        <th>Fakultas</th>
        <th>Periode</th>
        <th>Tahun Akademik</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $no=1+$this->uri->segment(3);;
      foreach($recordmahasiswa->result() as $r)
      {
      echo "<tr>
        <td>$no</td>
        <td>$r->NPM</td>
        <td>$r->nama</td>
        <td>$r->namaJurusan</td>
        <td>$r->namaFakultas</td>
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