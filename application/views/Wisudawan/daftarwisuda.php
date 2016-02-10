<a class="brand" href="<?php echo base_url()?>index.php/con_pendaftaran/tambah">Form Pendaftaran Yudisium atau Wisuda</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->


 <form action="<?=base_url()?>index.php/con_pendaftaran/tambah" method="post" enctype="multipart/form-data" class="form-horizontal">
		  <div class="hero-unit">
		  <div class="control-group">
			<label class="control-label" >ID Administrasi</label>
			<div class="controls">
			  <input type="text" class="span6" name="Administrasi" 
			  placeholder="ID Administrasi....">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >NPM</label>
			<div class="controls">
			  <input type="text" class="span6" name="npm" 
			  placeholder="NPM....">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Nama Mahasiswa</label>
			<div class="controls">
			  <input type="text" class="span6" name="nama" 
			  placeholder="Nama Mahasiswa....">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Jurusan</label>
			<div class="controls">
			  <select name="jurusan" class="chzn-select" style="width:180px;" tabindex="2">
			  	<?php
                foreach ($jurusan as $j)
                {
                    echo "<option value='$j->idJurusan'>$j->namaJurusan</option>";
                }
                ?>
            </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Jenis Kelamin</label>
			<div class="controls">
			  <select name="jk" data-placeholder="Rekening" class="chzn-select" style="width:180px;" tabindex="2">
			  	<?php
                foreach ($jkKelamin as $r)
                {
                    echo "<option value='$r->idJK'>$r->namaJK</option>";
                }
                ?>
            </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tempat Lahir</label>
			<div class="controls">
			  <input type="text" class="span6" name="tmLahir" 
			  placeholder="Tempat Lahir...."> 
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tanggal Lahir</label>
			<div class="controls">
			  <input type="date" class="span6" name="tgllahir">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tanggal Lulus Sidang</label>
			<div class="controls">
			  <input type="date" class="span6" name="tgllulus">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Judul TA atau Skripsi</label>
			<div class="controls">
			  <textarea name="JudulTS" id="textarea" class="span6" rows="4"></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Alamat Sekarang</label>
			<div class="controls">
			  <textarea name="alamatsekarang" id="textarea" class="span6" rows="4"></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Alamat Asal</label>
			<div class="controls">
			  <textarea name="alamatasal" id="textarea" class="span6" rows="4"></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >No Handphone</label>
			<div class="controls">
			  <input type="text" class="span6" name="noHandphone" 
			  placeholder="No handphone....">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Foto</label>
			<div class="controls">
			  <input type="file" class="span6" name="upload" value="upload" 
			  placeholder="Foto....">
			</div>
		  </div>
		</div>




<div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
    	<a class="brand" href="#">Form Peminjaman Toga</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  <div class="hero-unit">
  		<div class="control-group">
			<label class="control-label" >Ukuran Atribut Toga</label>
			<div class="controls">
			  <select name="ukuran" class="span6" data-placeholder="Ukuran" class="chzn-select" style="width:180px;" tabindex="2">
			  	<option value="M">M</option>
			  	<option value="L">L</option>
			  	<option value="XL">XL</option>
			  	<option value="XXL">XXL</option>
			  </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tanggal Peminjaman</label>
			<div class="controls">
				<input type="date" class="span6" name="Tanggalpinjam">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tanggal Pemulangan</label>
			<div class="controls">
			  <input type="date" class="span6" name="TanggalPulang">
			</div>
		  </div>
		</div>
	
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
    	<a class="brand" href="#">Form Persetujuan</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  		<div class="control-group">
			<div class="controls">
			   Dengan ini, saya nyatakan bahwa data yang ada pada borang adalah benar
			   dan tidak dapat untuk diubah kembali, Semua proses persetujuan pendaftaran akan dibatalkan apabila melanggar
			   peraturan dari panitia Yudisium atau wisuda.
			</div>
		</div>

		<div class="control-group">
			<div class="controls">
			   <input type="checkbox" name="ck1" id="checkbox" /> Saya Setuju 
		</div>
		</div>
	
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary" name="simpan">Simpan Data dan Cetak</button>
			  <button type="reset" class="btn">Hapus Data</button>
			</div>
		  </div>

<?php echo form_close(); ?>