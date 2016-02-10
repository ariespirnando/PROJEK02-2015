<a class="brand" href="">Edit Data Pendaftaran</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->


 <form action="<?=base_url()?>index.php/con_baaku/edit" method="post" enctype="multipart/form-data" class="form-horizontal">
		  <div class="hero-unit">


		  <div class="control-group">
			<label class="control-label" >NPM</label>
			<div class="controls">
			  <input type="text" class="span6" name="npm" value="<?php echo $record['NPM']; ?>">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Nama Mahasiswa</label>
			<div class="controls">
			  <input type="text" class="span6" name="nama" value="<?php echo $record['nama']; ?>" >
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Jurusan</label>
			<div class="controls">
			  <select name="jurusan" class="chzn-select" style="width:180px;" tabindex="2">
			  	<?php
                foreach ($jurusan as $r)
                {
                	echo "<option value='$r->idJurusan'";
                	echo $record['idJurusan']==$r->idJurusan?'selected':'';
                	echo ">$r->namaJurusan</option>";
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
                	echo "<option value='$r->idJK'";
                	echo $record['idJK']==$r->idJK?'selected':'';
                	echo ">$r->namaJK</option>";
                }
                ?>
            </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tempat Lahir</label>
			<div class="controls">
			  <input type="text" class="span6" name="tmLahir" value="<?php echo $record['tempatLahir']; ?>" > 
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tanggal Lahir</label>
			<div class="controls">
			  <input type="date" class="span6" name="tgllahir" value="<?php echo $record['tanggalLahir']; ?>" >
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tanggal Lulus Sidang</label>
			<div class="controls">
			  <input type="date" class="span6" name="tgllulus" value="<?php echo $record['tanggalLulus']; ?>" >
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Judul TA atau Skripsi</label>
			<div class="controls">
			  <textarea name="JudulTS" id="textarea" class="span6" rows="4"><?php echo $record['JudulTa']; ?></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Alamat Sekarang</label>
			<div class="controls">
			  <textarea name="alamatsekarang" id="textarea" class="span6" rows="4"><?php echo $record['alamatsekarang']; ?></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Alamat Asal</label>
			<div class="controls">
			  <textarea name="alamatasal" id="textarea" class="span6" rows="4"><?php echo $record['alamatasal']; ?></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >No Handphone</label>
			<div class="controls">
			  <input type="text" class="span6" name="noHandphone" value="<?php echo $record['HP']; ?>">
			</div>
		  </div>

		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
			  <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>index.php/con_baaku/laporan">Kembali</a>
			</div>
		  </div>
</div>

<?php echo form_close(); ?>