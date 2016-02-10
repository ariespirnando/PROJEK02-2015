<a class="brand" href="#"> Jadwal Pendaftaran</a>


	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
<div align="Center">
    <table class="table table-hover table-condensed">
        <thead>
        	<tr>
        		<th>No</th>
        		<th>Periode</th>
        		<th>Mulai Pendaftaran</th>
    			<th>Akhir Pendaftaran</th>
    			<th>Tanggal Pelakasanaan</th>   
                <th>Keterangan</th> 
                <th>Aksi</th>   			
            </tr>
    	</thead>
    	<tbody>
    	<?php
    		$no=1;
    		foreach($recordData->result() as $r)
      		{
      			echo "<tr>
        		<td>$no</td>
        		<td>$r->Periode</td>
        		<td>$r->mulai_pendaftaran</td>
        		<td>$r->akhir_pendaftaran</td>
        		<td>$r->tgl_pelaksanaan</td>
                <td>$r->status</td>";
            ?>
                <td><div class="btn-group">
                    <a class="btn btn-small" href="<?php echo base_url()?>index.php/con_baaku/editJadwal/<?php echo $r->id_pend; ?>">
                        <i class="icon-pencil"></i></a></li>
                    </div><!-- /btn-group -->
                </td>
                </tr>
            <?php
            $no++;
        		}
        			
        	?>
    		</tbody>
        </table>
</div>