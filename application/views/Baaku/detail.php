<a class="brand" href="#">Detail Pendaftararan</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->


 <div class="form-horizontal">
		  <div class="hero-unit">
		  <div class="control-group">
			<label class="control-label" >ID Administrasi</label>
			<div class="controls">
			  <input type="text" class="span6" name="Administrasi" value="<?php echo $record['id_administrasi']; ?>">
			</div>
		  </div>

		   <div class="control-group">
			<label class="control-label" >Tahun Akademik</label>
			<div class="controls">
			  <input type="text" class="span6" name="Administrasi" value="<?php echo $record['TahunAkademik']; ?>">
			</div>
		  </div>

		   <div class="control-group">
			<label class="control-label" >Periode</label>
			<div class="controls">
			  <input type="text" class="span6" name="Administrasi" value="<?php echo $record['Periode']; ?>">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >NPM</label>
			<div class="controls">
			  <input type="text" class="span6" name="npm" value="<?php echo $record['NPM']; ?>">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Nama Mahasiswa</label>
			<div class="controls">
			  <input type="text" class="span6" name="nama" value="<?php echo $record['nama']; ?>">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Jurusan</label>
			<div class="controls">
			   <input type="text" class="span6" name="tmLahir" value="<?php echo $record['namaJurusan']; ?>"> 
            </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Fakultas</label>
			<div class="controls">
			   <input type="text" class="span6" name="tmLahir" value="<?php echo $record['namaFakultas']; ?>"> 
            </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Jenis Kelamin</label>
			<div class="controls">
			  <input type="text" class="span6" name="tmLahir" value="<?php echo $record['namaJK']; ?>"> 
            </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tempat Lahir</label>
			<div class="controls">
			  <input type="text" class="span6" name="tmLahir" value="<?php echo $record['tempatLahir']; ?>"> 
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tanggal Lahir</label>
			<div class="controls">
			  <input type="date" class="span6" name="tgllahir" value="<?php echo $record['tanggalLahir']; ?>">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tanggal Lulus Sidang</label>
			<div class="controls">
			  <input type="date" class="span6" name="tgllulus" value="<?php echo $record['tanggalLulus']; ?>">
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
			<label class="control-label" >Foto</label>
			<div class="controls">
			  <img class="image" width="100" height="150"src="<?php echo base_url(); ?>assets/Upload/<?php echo $recorffoto['foto_wisuda']; ?>"
			</div>
		  </div>
		</div>

		<div class="control-group">
			<div class="navbar-form pull-right">
		  		<a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>index.php/con_baaku">Kembali</a>
			</div>
		</div>
	</div>

</div>