<a class="brand" href="#"> Info Pendaftaran</a>
	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
<div class="hero-unit" align="Center">
        <table class="table table-hover table-condensed">
        	<thead>
        		<tr>
        			<th>No</th>
        			<th>Periode</th>
        			<th>Mulai Pendaftaran</th>
        			<th>Akhir Pendaftaran</th>
        			<th>Tanggal Pelakasanaan</th>
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
        			<td>$r->Akhir_pendaftaran</td>
        			<td>$r->tgl_pelaksanaan</td></tr>";
        			$no++;
        		}
        			
        	?>

    		</tbody>

        </table>
</div>