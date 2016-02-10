<a class="brand" href="#">Edit Jadwal Pendaftaran</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->


 <form action="<?=base_url()?>index.php/con_baaku/editJadwal" method="post" class="form-horizontal">
		  <div class="hero-unit">
		  <div class="control-group">
			<label class="control-label" >Periode Pendaftaran</label>
			<div class="controls">
			  <select name="periode" class="chzn-select" style="width:180px;" tabindex="2">
			  	<option value='<?php echo $record['Periode']; ?>'><?php echo $record['Periode']; ?></option>
            </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Mulai Pendaftaran</label>
			<div class="controls">
			  <input type="date" class="span6" name="mulaipend" value='<?php echo $record['mulai_pendaftaran']; ?>'>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Akhir Pendaftaran</label>
			<div class="controls">
			  <input type="date" class="span6" name="akhirpend" value="<?php echo $record['Akhir_pendaftaran']; ?>">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Tanggal Pelaksanaan</label>
			<div class="controls">
			  <input type="date" class="span6" name="tglplks" value='<?php echo $record['tgl_pelaksanaan']; ?>'>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" >Status</label>
			<div class="controls">
			  <select name="Status" data-placeholder="Rekening" class="chzn-select" style="width:180px;" tabindex="2">
			  	<?php
                foreach ($status as $r)
                {
                	echo "<option value='$r->id_status'";
                    echo $record['id_status']==$r->id_status?'selected':'';
                    echo ">$r->status</option>";
                }
                ?>
            </select>
			</div>
		  </div>
		  <input type="hidden" name="idpend" value='<?php echo $record['id_pend']; ?>'>

		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary" name="edit" >Edit Data</button>
			  <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>index.php/con_baaku/jadwal">Kembali</a>
			</div>
		  </div>
</div>
<?php echo form_close(); ?>