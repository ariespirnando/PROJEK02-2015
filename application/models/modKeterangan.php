<?php
class modKeterangan extends CI_Model {
	
	function tampilketerangan(){
		return $this->db->get('keterangan');
	}
}



?>