<?php

class modtoga extends CI_Model{
	function pinjamtoga(){
    	$sql="SELECT p.id_toga, p.NPM, c.nama, j.namaJurusan, p.Ukuran_toga, p.tgl_peminjaman, 
    	p.tgl_pemulangan, k.Keterangan, c.HP FROM keterangan AS k,cawisuda AS c, jurusan AS j, peminjaman AS p 
        WHERE p.NPM = c.NPM AND c.idJurusan = j.idJurusan AND p.id_ket = k.id_ket";
    	return $this->db->query($sql);
    }
    function pinjamtogapaging($halaman,$batas){
    	$sql="SELECT p.id_toga, p.NPM, c.nama, j.namaJurusan, p.Ukuran_toga, p.tgl_peminjaman, 
    	p.tgl_pemulangan, k.Keterangan, c.HP FROM keterangan AS k, cawisuda AS c, jurusan AS j, peminjaman AS p WHERE p.NPM = c.NPM 
    	AND c.idJurusan = j.idJurusan AND p.id_ket = k.id_ket LIMIT $halaman,$batas";
    	return $this->db->query($sql);
    }
    function caridata($id){
		$sql="SELECT p.id_toga, p.NPM, c.nama, j.namaJurusan, p.Ukuran_toga, p.tgl_peminjaman, 
    	p.tgl_pemulangan, k.Keterangan FROM keterangan AS k, cawisuda AS c, jurusan AS j, peminjaman AS p WHERE 
    	p.NPM = c.NPM AND c.idJurusan = j.idJurusan AND p.id_ket = k.id_ket AND p.NPM='$id'";
		return $this->db->query($sql);
	}
	function caridatapaging($id,$halaman,$batas){
		$sql="SELECT p.id_toga, p.NPM, c.nama, j.namaJurusan, p.Ukuran_toga, p.tgl_peminjaman, 
    	p.tgl_pemulangan, k.Keterangan, c.HP FROM keterangan AS k, cawisuda AS c, jurusan AS j, peminjaman AS p WHERE 
    	p.NPM = c.NPM AND c.idJurusan = j.idJurusan AND p.id_ket = k.id_ket AND p.NPM='$id' LIMIT $halaman,$batas";
		return $this->db->query($sql);
	}
	function hapus($id){
		$this->db->where('id_toga',$id);
		return $this->db->delete('peminjaman');
	}
	function getout($id){
		$parameter = array('id_toga'=>$id);
		return $this->db->get_where('peminjaman',$parameter);
	}
    function edit($data,$id)
    {
        $this->db->where('id_Toga',$id);
        $this->db->update('peminjaman',$data);
    }
	function cek_input($id)
    {

        $chek=  $this->db->get_where('peminjaman',$id);
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    function simpanpinjamToga($data){
        $this->db->insert('peminjaman',$data);
    }
}
?>