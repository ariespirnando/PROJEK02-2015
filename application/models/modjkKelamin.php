<?php
class modjkKelamin extends CI_Model{
	function tampil(){
		return $this->db->get('jkkelamin');
	}
}
?>