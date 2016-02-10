<?php

class modBaaku extends CI_Model{
	
	function datamahasiswa(){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend";
		return $this->db->query($sql);
	}
	function datamahasiswapagging($halaman,$batas){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend ORDER BY cw.id_administrasi limit $halaman,$batas";
		return $this->db->query($sql);
	}
	function datamahasiswaCari($id){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.NPM='$id'";
		return $this->db->query($sql);
	}
	function datamahasiswaCaripaging($id,$halaman,$batas){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.NPM='$id' ORDER BY cw.id_administrasi limit $halaman,$batas";
		return $this->db->query($sql);
	}
	//==========================================================================================================================
	function datamahasiswaIT(){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.idJurusan=1 ORDER BY cw.id_administrasi";
		return $this->db->query($sql);
	}
	function datamahasiswaITpagging($halaman,$batas){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.idJurusan=1 
		ORDER BY cw.id_administrasi limit $halaman,$batas";
		return $this->db->query($sql);
	}
	function  datamahasiswaTahunIT($id){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.idJurusan=1  
		AND ad.TahunAkademik='2015' AND ad.id_pend =$id ORDER BY cw.id_administrasi";
		return $this->db->query($sql);
	}
	function  datamahasiswaTahunITpagging($id,$halaman,$batas){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.idJurusan=1  
		AND ad.TahunAkademik='2015' AND ad.id_pend =$id ORDER BY cw.id_administrasi limit $halaman,$batas";
		return $this->db->query($sql);
	}
	//============================================================================================================================
	function datamahasiswaSI(){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.idJurusan=2 ORDER BY cw.id_administrasi";
		return $this->db->query($sql);
	}
	function datamahasiswaSIpagging($halaman,$batas){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.idJurusan=2 
		ORDER BY cw.id_administrasi limit $halaman,$batas";
		return $this->db->query($sql);
	}
	function  datamahasiswaTahunSI($id){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.idJurusan=2  
		AND ad.TahunAkademik='2015' AND ad.id_pend =$id ORDER BY cw.id_administrasi";
		return $this->db->query($sql);
	}
	function  datamahasiswaTahunSIpagging($id,$halaman,$batas){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.idJurusan=2  
		AND ad.TahunAkademik='2015' AND ad.id_pend =$id ORDER BY cw.id_administrasi limit $halaman,$batas";
		return $this->db->query($sql);
	}
	//=============================================================================================================================
	
	function getout($id){
		$sql="SELECT cw.id_administrasi, cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.NPM = '$id'";
		return $this->db->query($sql);
	}
	function  datamahasiswaTahunITCheck($id){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.idJurusan=1  
		AND ad.TahunAkademik='2015' AND ad.id_pend =$id ORDER BY cw.id_administrasi";
		$chek=$this->db->query($sql);
		if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }

	}
	function getoutEdit($id){
		$parameter = array('NPM'=>$id);
		return $this->db->get_where('cawisuda',$parameter);
	}
	function  datamahasiswaTahunSICheck($id){
		$sql="SELECT cw.NPM, cw.nama, jk.namaJK, cw.tanggalLahir, cw.tempatLahir, jur.namaJurusan, fak.namaFakultas,
		cw.JudulTa, cw.tanggalLulus, cw.alamatsekarang, cw.alamatasal, cw.HP, ad.TahunAkademik, p.Periode FROM
		cawisuda AS cw, jkkelamin AS jk, jurusan AS jur, fakultas AS fak, administrasi AS ad, periode AS p WHERE
		cw.idJK = jk.idJK AND cw.idJurusan = jur.idJurusan AND jur.idFakultas = fak.idFakultas AND 
		cw.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend AND cw.idJurusan=2  
		AND ad.TahunAkademik='2015' AND ad.id_pend =$id ORDER BY cw.id_administrasi";
		$chek=$this->db->query($sql);
		if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
}

?>