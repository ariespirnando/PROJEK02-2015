<a class="brand" href="<?php echo base_url()?>index.php/con_keuangan/edit">Edit Data Administrasi</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  <div class="hero-unit">
<?php echo form_open('con_keuangan/edit','class="form-horizontal"'); ?>
		  
		  <div class="control-group">
			<label class="control-label" >ID Administrasi</label>
			<div class="controls">
			  <input type="text" class="span6" name="Administrasi" value="<?php echo $record['id_administrasi']; ?>">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Nomor Rekening</label>
			<div class="controls">
			  <select name="Rekening" data-placeholder="Rekening" class="chzn-select" style="width:180px;" tabindex="2">
			  	<?php
                foreach ($rekening as $r)
                {
                    echo "<option value='$r->id_rekening'";
                    echo $record['id_rekening']==$r->id_rekening?'selected':'';
                    echo ">$r->No_rekening</option>";
                }
                ?>
            </select>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Jumlah Bayar</label>
			<div class="controls">
			  Rp. <input type="text" class="span5" name="Jumlah" value="<?php echo $record['jumlahBayar']; ?>">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Tanggal Pembayaran</label>
			<div class="controls">
			  <input type="date" class="span2" name="Tanggal" value="<?php echo $record['tanggalBayar']; ?>">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >NPM</label>
			<div class="controls">
			  <input type="text" class="span6" name="NPM" value="<?php echo $record['Npm']; ?>">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Nama</label>
			<div class="controls">
			  <input type="text" class="span6" name="Nama" value="<?php echo $record['Nama']; ?>">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label">Semester</label>
			<div class="controls">
			  <select name="Semester" data-placeholder="Semester" class="chzn-select" style="width:180px;" tabindex="2">
			  	<option value="<?php echo $record['Semester']; ?>"><?php echo $record['Semester']; ?></option>
			  	<?php for($n=5;$n<=12;$n++){ ?>
			<option value="<?php echo $n; ?>"><?php echo $n; ?></option>
				<?php
			}
			?>
		</select>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label">Priode Pendaftaran</label>
			<div class="controls">
			  <select name="Priode" data-placeholder="Priode" class="chzn-select" style="width:180px;" tabindex="2">
			  	<?php
                foreach ($priode as $p)
                {
                    echo "<option value='$p->id_pend'";
                    echo $record['id_pend']==$p->id_pend?'selected':'';
                    echo ">$p->Periode</option>";
                }
                ?>
                </select>
			</div>
		  </div>

			<div class="control-group">
			<label class="control-label">Tahun Akademik</label>
			<div class="controls">
			  <select name="Tahun" data-placeholder="Tahun" class="chzn-select" style="width:180px;" tabindex="2">
			  	<option value="<?php echo $record['TahunAkademik']; ?>"><?php echo $record['TahunAkademik']; ?></option>
			  </select>
			</div>
		  </div>
		  
		  
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary" name="edit" onClick="return confirm('Data sudah diedit');">Edit Data</button>
			  <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>index.php/con_keuangan">Kembali</a>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>