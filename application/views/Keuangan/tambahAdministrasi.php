<a class="brand" href="<?php echo base_url()?>index.php/con_keuangan/tambah">Tambah Data Administrasi</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
<div class="hero-unit">
<?php echo form_open('con_keuangan/tambah','class="form-horizontal"'); ?>
		  
		  <div class="control-group">
			<label class="control-label" >ID Administrasi</label>
			<div class="controls">
			  <input type="text" class="span6" name="Administrasi" value="<?php  echo $noadm; ?>"
			  placeholder="ID Administrasi....">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Nomor Rekening</label>
			<div class="controls">
			  <select name="Rekening" data-placeholder="Rekening" class="chzn-select" style="width:180px;" tabindex="2">
			  	<?php
                foreach ($rekening as $r)
                {
                    echo "<option value='$r->id_rekening'>$r->No_rekening</option>";
                }
                ?>
            </select>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Jumlah Bayar</label>
			<div class="controls">
			  Rp. <input type="text" class="span5" name="Jumlah" 
			  placeholder="Jumlah Pembayaran....">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Tanggal Pembayaran</label>
			<div class="controls">
			  <input type="date" class="span2" name="Tanggal" 
			  placeholder="Tanggal Pembayaran">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >NPM</label>
			<div class="controls">
			  <input type="text" class="span6" name="NPM" 
			  placeholder="NPM....">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Nama</label>
			<div class="controls">
			  <input type="text" class="span6" name="Nama" 
			  placeholder="Nama....">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label">Semester</label>
			<div class="controls">
			  <select name="Semester" data-placeholder="Semester" class="chzn-select" style="width:180px;" tabindex="2">
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
                    echo "<option value='$p->id_pend'>$p->Periode</option>";
                }
                ?>
                </select>
			</div>
		  </div>
			<div class="control-group">
			<label class="control-label">Tahun Akademik</label>
			<div class="controls">
			  <select name="Tahun" data-placeholder="Tahun" class="chzn-select" style="width:180px;" tabindex="2">
			  	
			<option value="2015">2015</option>
				
		</select>
			</div>
		  </div>
		  
		  
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
			  <button type="reset" class="btn">Hapus Data</button>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>