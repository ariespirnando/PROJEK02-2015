<a class="brand" href="<?php echo base_url()?>index.php/con_toga/edittoga">Edit Data Peminjaman</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  <div class="hero-unit">
<?php echo form_open('/con_toga/edittoga','class="form-horizontal"'); ?>

		  <input type="hidden" name="idperiod" value="<?php echo $record['id_Toga']; ?>">
		  <div class="control-group">
			<label class="control-label" >NPM</label>
			<div class="controls">
			  <input type="text" class="span6" name="NPM" value="<?php echo $record['NPM']; ?>">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Ukuran Toga</label>
			<div class="controls">
			  <input type="text" class="span6" name="Ukuran" value="<?php echo $record['Ukuran_toga']; ?>">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label">Keterangan</label>
			<div class="controls">
			  <select name="Keterangan" data-placeholder="Semester" class="chzn-select" style="width:180px;" tabindex="2">
			  	<?php
                foreach ($keterangan as $r)
                {
                    echo "<option value='$r->id_ket'";
                    echo $record['id_ket']==$r->id_ket?'selected':'';
                    echo ">$r->Keterangan</option>";
                }
                ?>
		</select>
			</div>
		  </div>
		  
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
			  <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>index.php/con_toga">Kembali</a>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>