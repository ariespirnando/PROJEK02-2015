<?php
class modJurusan extends CI_Model{
	function tampil(){
		return $this->db->get('jurusan');
	}
}
?>