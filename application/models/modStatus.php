<?php

class modStatus extends CI_Model{
	
	function tampil(){
		return $this->db->get('statuss');
	}
}

?>