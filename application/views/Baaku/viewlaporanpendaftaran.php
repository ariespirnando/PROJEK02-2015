<a class="brand" href="#">Laporan Pendaftaran</a>

    <div class="span6 pull-right">
    <?php echo form_open("con_baaku", 'class="navbar-form pull-right"'); ?>
      <input type="text" class="span3" name="cari" placeholder="Masukkan NPM">
      <button type="submit" class="btn btn-primary" name="btCari"><i class="icon-search icon-white"></i> Cari Data Pendaftaran</button>
    <?php echo form_close(); ?>
    </div>
    </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  
    <section>
  <div class="table-responsive">
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
        <th>Aksi</th>
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
        <td>$r->TahunAkademik</td>";
        ?>
        <td>
          <div class="btn-group">
            <a class="btn btn-small medium-box" href="<?php echo base_url()?>index.php/con_baaku/detail/<?php echo $r->NPM; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
            <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>index.php/con_baaku/edit/<?php echo $r->NPM; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li> 
            </ul>
          </div><!-- /btn-group -->
        </td>
      </tr>
    <?php
      $no++;
    }
    ?>
    </tbody>
  </table>
</div>
</section>
<?php
echo $paging;
?>