<?php
class modFoto extends CI_Model{
	function simpanfoto($foto){
		$this->db->insert('foto',$foto);
	}
	function lihatfoto($id){
		$foto = array('NPM'=>$id);
		return $this->db->get_where('foto',$foto);
	}
}
?>