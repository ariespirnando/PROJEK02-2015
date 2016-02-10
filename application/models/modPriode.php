<?php

class modPriode extends CI_Model{
	function tamplipriode(){
		return $this->db->get('periode');
	}
	function tampiledit($id){
		$parameter = array('id_pend'=>$id);
		return $this->db->get_where('periode',$parameter);
	}
	function tampilperiodebaaku(){
		$sql="SELECT p.id_pend, p.Periode, p.mulai_pendaftaran, p.akhir_pendaftaran, p.tgl_pelaksanaan, s.status
		FROM periode AS p, statuss AS s WHERE p.id_status = s.id_status";
		return $this->db->query($sql);
	}
	function edit($data,$id){
		$this->db->where('id_pend',$id);
		$this->db->update('periode',$data);
	}
	function cekstatus($id){
		$sql ="SELECT * FROM periode WHERE id_pend=$id AND id_status=1";
		$chek = $this->db->query($sql);
		if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
}

?>