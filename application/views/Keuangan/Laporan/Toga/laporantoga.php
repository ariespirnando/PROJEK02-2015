<a class="brand" href="<?php echo base_url()?>index.php/con_keuangan/laporanpinjam">Laporan Peminjaman Toga</a>
  
  <div class="span6 pull-right">
    <?php echo form_open("con_toga", 'class="navbar-form pull-right"'); ?>
      <input type="text" class="span2" name="cari" placeholder="Masukkan NPM">
      <button type="submit" class="btn btn-primary" name="btCari"><i class="icon-search icon-white"></i> Cari Data Pemninjaman</button>
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
        <th>Ukuran Toga</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pemulangan</th>
        <th>No Handphone</th>
        <th>Keterangan</th>
        <th>Operation</th>
      </tr>
      </thead>
      <tbody>
      <?php
      $no=1+$this->uri->segment(3);
      foreach ($pinjamtoga->result() as $r) {
        echo "<tr>
        <td>$no</td>
        <td>$r->NPM</td>
        <td>$r->nama</td>
        <td>$r->namaJurusan</td>
        <td>$r->Ukuran_toga</td>
        <td>$r->tgl_peminjaman</td>
        <td>$r->tgl_pemulangan</td>
        <td>$r->HP</td>
        <td>$r->Keterangan</td>";
        ?>
        <td>
        <div class="btn-group">
          <a class="btn btn-small" href="<?php echo base_url()?>index.php/con_toga/edittoga/<?php echo $r->id_toga; ?>"><i class="icon-pencil"></i></a></li>
          <a class="btn btn-small" href="<?php echo base_url()?>index.php/con_toga/hapus/<?php echo $r->id_toga; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i></a>
          
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