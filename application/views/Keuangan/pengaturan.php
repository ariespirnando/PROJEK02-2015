<a class="brand" href="<?php echo base_url()?>index.php/con_keuangan/Pengaturan">Pengaturan Password dan Username</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
<div class="hero-unit">
<?php echo form_open('con_keuangan/Pengaturan','class="form-horizontal"'); ?>
		  
		  <div class="control-group">
			<label class="control-label" >Username</label>
			<div class="controls">
			  <input type="text" class="span6" name="Username" 
			  placeholder="Username">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Password</label>
			<div class="controls">
			  <input type="password" class="span6" name="password" 
			  placeholder="Password">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Username baru</label>
			<div class="controls">
			  <input type="text" class="span6" name="UsernameBaru" 
			  placeholder="Username Baru">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" >Password Baru</label>
			<div class="controls">
			  <input type="password" class="span6" name="PasswordBaru" 
			  placeholder="Password Baru">
			</div>
		  </div>

		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary" name="Edit">Ubah Password</button>
			  <button type="reset" class="btn">Hapus Data</button>
			</div>
		  </div>
		  
		<?php echo form_close(); ?>
	</div>