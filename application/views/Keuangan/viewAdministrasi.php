<a class="brand">Data Administrasi</a>

      <div class="nav-collapse">
      <ul class="nav">
        <li><a href="<?php echo base_url()?>index.php/con_keuangan/tambah" class="medium-box"><i class="icon-plus-sign icon-white">
        </i> Tambah Data Administrasi</a></li>
     </ul>
      </div>

    <div class="span6 pull-right">
    <?php echo form_open("con_keuangan", 'class="navbar-form pull-right"'); ?>
      <input type="text" class="span3" name="cari" placeholder="No Administrasi atau NPM">
      <button type="submit" class="btn btn-primary" name="btCari"><i class="icon-search icon-white"></i> Cari Data Administrasi</button>
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
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $no=1+$this->uri->segment(3);
      foreach($record_keuangan->result() as $r)
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
        <td>$r->TahunAkademik</td>";
        ?>
        <td>
        <div class="btn-group">
          <a class="btn btn-small" href="<?php echo base_url()?>index.php/con_keuangan/edit/<?php echo $r->id_administrasi; ?>">
              <i class="icon-pencil"></i></a></li>
          <a class="btn btn-small" href="<?php echo base_url()?>index.php/con_keuangan/hapus/<?php echo $r->id_administrasi; ?>"
             onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i></a>
          </div><!-- /btn-group -->
        </td>
      </tr>
    <?php
      $no++;
    }
    ?>
    </tbody>
  </table>
</section>
<?php
    echo $paging;
?>