<?php

class modKeuangan extends CI_Model{
	function tampildata(){
		$sql="SELECT a.id_administrasi, r.No_rekening, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
		p.Periode, a.TahunAkademik FROM administrasi AS a, rekening AS r, periode AS p
		WHERE a.id_rekening = r.id_rekening AND a.id_pend = p.id_pend ";
		return $this->db->query($sql);
	}
	function tampildatapaging($halaman,$batas)
    {
        $query= "SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
		p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
		WHERE a.id_rekening = r.id_rekening AND r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend 
        ORDER BY a.tanggalBayar limit $halaman,$batas";
        return $this->db->query($query);
    }
	function lapwis(){
		$sql="SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE a.id_rekening = r.id_rekening AND r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend 
    	AND a.id_pend =4";
		return $this->db->query($sql);
	}
	function Carilapwis($id){
		$sql="SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE a.id_rekening = r.id_rekening AND r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend 
    	AND a.id_pend =4 AND r.idJurusan =$id ORDER BY a.tanggalBayar";
		return $this->db->query($sql);
	}
	function Carilapwischek($id){
		$sql="SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE a.id_rekening = r.id_rekening AND r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend 
    	AND a.id_pend =4 AND r.idJurusan =$id ORDER BY a.tanggalBayar";
		$chek = $this->db->query($sql);
		if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
	function Carilapwispagging($id,$halaman,$batas){
		$sql="SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE a.id_rekening = r.id_rekening AND r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend 
    	AND a.id_pend =4 AND r.idJurusan =$id ORDER BY a.tanggalBayar limit $halaman,$batas";
		return $this->db->query($sql);
	}

	function lapwisdatapaging($halaman,$batas)
    {
    	$query= "SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE a.id_rekening = r.id_rekening AND r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend 
    	AND a.id_pend =4 ORDER BY a.tanggalBayar limit $halaman,$batas";
        return $this->db->query($query);
    }
    //============================================================================================
	function lapyud(){
		$sql="SELECT a.id_administrasi, r.No_rekening, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
		p.Periode, a.TahunAkademik FROM administrasi AS a, rekening AS r, periode AS p
		WHERE a.id_rekening = r.id_rekening AND a.id_pend = p.id_pend AND a.id_pend !=4 ";
		return $this->db->query($sql);
	}
	function carilapyud($id){
		$sql="SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE a.id_rekening = r.id_rekening AND r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend 
    	AND a.id_pend !=4 AND r.idJurusan =$id ORDER BY a.tanggalBayar";
		return $this->db->query($sql);
	}
	function carilapyudcek($id){
		$sql="SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE a.id_rekening = r.id_rekening AND r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend 
    	AND a.id_pend !=4 AND r.idJurusan =$id";
		$chek = $this->db->query($sql);
		if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
	function carilapyudpaging($id,$halaman,$batas){
		$sql="SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE a.id_rekening = r.id_rekening AND r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend 
    	AND a.id_pend !=4 AND r.idJurusan =$id ORDER by a.tanggalBayar limit $halaman,$batas";
		return $this->db->query($sql);
	}
	function lapyuddatapaging($halaman,$batas)
    {
        $query= "SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE a.id_rekening = r.id_rekening AND r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend 
    	AND a.id_pend !=4 ORDER BY a.tanggalBayar limit $halaman,$batas";
        return $this->db->query($query);
    }
    //============================================================================================
	function caridata($id){
		$sql="SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE   a.id_rekening = r.id_rekening AND
    	r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend AND a.Npm='$id' OR a.id_administrasi='$id' AND a.id_pend = p.id_pend AND
    	a.id_rekening = r.id_rekening AND
    	r.idJurusan = j.idJurusan";
		return $this->db->query($sql);
	}
	function caridatapaging($id,$halaman,$batas)
    {
        $query= "SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE  a.id_rekening = r.id_rekening AND
    	r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend AND a.Npm='$id' OR a.id_administrasi='$id' AND a.id_pend = p.id_pend AND
    	a.id_rekening = r.id_rekening AND
    	r.idJurusan = j.idJurusan ORDER by a.tanggalBayar limit $halaman,$batas";
        return $this->db->query($query);
    }
	function hapus($id){
		$this->db->where('id_administrasi',$id);
		return $this->db->delete('administrasi');
	}
	function getout($id){
		$parameter = array('id_administrasi'=>$id);
		return $this->db->get_where('administrasi',$parameter);
	}
	function simpan($data){
		$this->db->insert('administrasi',$data);
	}
	function edit($data,$id)
    {
        $this->db->where('id_administrasi',$id);
        $this->db->update('administrasi',$data);
    }
    function cek_inputdt($id)
    {

        $sql="SELECT a.id_administrasi, r.No_rekening, j.namaJurusan, a.tanggalBayar, a.Npm, a.Nama, a.Semester,
    	p.Periode, a.TahunAkademik FROM administrasi AS a,jurusan AS j, rekening AS r, periode AS p
    	WHERE a.id_administrasi='$id' OR a.Npm='$id' AND a.id_rekening = r.id_rekening AND
    	r.idJurusan = j.idJurusan AND a.id_pend = p.id_pend";
    	$chek = $this->db->query($sql);
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    function cek_input($id){
        $chek=  $this->db->get_where('administrasi',$id);
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }

    function cekpriodependadm($id){
    	$sql="SELECT a.id_administrasi, a.id_pend, p.id_status FROM administrasi AS a, periode AS p, statuss AS s
    	WHERE a.id_pend = p.id_pend AND p.id_status = s.id_status AND p.id_status = 1 AND  a.id_administrasi ='$id'";
    	$chek=$this->db->query($sql);
    	if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    function getkodeadm(){
        $th = date("Y");
        $kode = 'ADM';
        $sql="SELECT id_administrasi FROM administrasi ORDER BY id_administrasi DESC";
        $data = $this->db->query($sql);
        $row = $data->row_array();
        $nk = $row['id_administrasi'];
        $nk1 = (int) substr($nk,10,14);
        $no = $nk1+1;
        if($no<9){
            $adm = $kode.'/'.$th.'/0000'.$no;
        }else if($no<99){
            $adm = $kode.'/'.$th.'/000'.$no;
        }else if($no<999){
            $adm = $kode.'/'.$th.'/00'.$no;
        }else if($no<9999){
            $adm = $kode.'/'.$th.'/0'.$no;
        }else{
            $adm = $kode.'/'.$th.'/'.$no;
        }
        return $adm;
    }

}

?>