<a class="brand" href="#">No Kursi</a>

    <div class="span6 pull-right">
    <?php echo form_open("con_baaku/noKursi", 'class="navbar-form pull-right"'); ?>
      <input type="text" class="span3" name="cari" placeholder="Masukkan NPM">
      <button type="submit" class="btn btn-primary" name="btCari"><i class="icon-search icon-white"></i> Cari no kursi</button>
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
        <th>Periode</th>
        <th>Nomor Kursi</th>
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
        <td>$r->Periode</td>
        <td>$r->No_Kursi</td>
        </tr>";
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