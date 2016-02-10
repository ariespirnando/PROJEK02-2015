<?php

class modelRekening extends CI_Model{
	function tampil(){
		return $this->db->get('rekening');
	}
}


?>