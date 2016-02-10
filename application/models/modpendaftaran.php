<?php
class modpendaftaran extends CI_Model{
	function simpanPendaftar($data){
		$this->db->insert('cawisuda',$data);
	}
	function edit($data,$id){
		$this->db->where('NPM',$id);
		$this->db->update('cawisuda',$data);
	}
	function cetak($id){
		$sql="SELECT c.id_administrasi, c.NPM, c.nama, jur.namaJurusan, fak.namaFakultas, a.TahunAkademik, pe.Periode, pnjm.Ukuran_toga, 
		pnjm.tgl_peminjaman, pnjm.tgl_pemulangan, f.foto_wisuda , nk.No_Kursi 
		FROM nomorkursi AS nk,cawisuda AS c, foto AS f, administrasi AS a, fakultas AS fak, 
		jurusan AS jur, peminjaman AS pnjm, periode AS pe WHERE c.id_administrasi = a.id_administrasi AND c.idJurusan = jur.idJurusan 
		AND jur.idFakultas = fak.idFakultas AND a.id_pend = pe.id_pend AND c.NPM = pnjm.NPM AND c.NPM = f.NPM 
		AND c.NPM = nk.NPM AND c.NPM ='$id'";
		return $this->db->query($sql);
	}
	function cek_input($id){
		$chek=  $this->db->get_where('cawisuda',$id);
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
	function noKursi(){
		$kode = 'YD/WS';
		$sql="SELECT No_Kursi FROM nomorkursi ORDER BY id_kursi DESC";
		$data = $this->db->query($sql);
		$row = $data->row_array();
		$nk = $row['No_Kursi'];
		$nk1 = (int) substr($nk,7,10);
		$no = $nk1+1;
		if($no<9){
			$nomorkursi = $kode.'/0000'.$no;
		}else if($no<99){
			$nomorkursi = $kode.'/000'.$no;
		}else if($no<999){
			$nomorkursi = $kode.'/00'.$no;
		}else if($no<9999){
			$nomorkursi = $kode.'/0'.$no;
		}else{
			$nomorkursi = $kode.'/'.$no;
		}
		return $nomorkursi;
	}
	function cek_nokursi($id){
		$chek=  $this->db->get_where('nomorkursi',$id);
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
	//============================================================================
	function datakursi(){
		$sql="SELECT c.NPM, c.nama, j.namaJurusan, p.Periode, nk.No_Kursi 
		FROM nomorkursi AS nk, cawisuda AS c, jurusan AS j, administrasi AS ad, periode AS p
		WHERE nk.NPM = c.NPM AND c.idJurusan = j.idJurusan AND c.id_administrasi = ad.id_administrasi AND ad.id_pend = p.id_pend";
		return $this->db->query($sql);
	}
	function datakursipaging($halaman,$batas){
		$sql="SELECT c.NPM, c.nama, j.namaJurusan, p.Periode, nk.No_Kursi 
		FROM nomorkursi AS nk, cawisuda AS c, jurusan AS j, administrasi AS ad, periode AS p
		WHERE nk.NPM = c.NPM AND c.idJurusan = j.idJurusan AND c.id_administrasi = ad.id_administrasi 
		AND ad.id_pend = p.id_pend ORDER BY nk.No_Kursi limit $halaman,$batas";
		return $this->db->query($sql);
	}
	function caridatakursi($id){
		$sql="SELECT nk.NPM, c.nama, j.namaJurusan, p.Periode, nk.No_Kursi 
		FROM nomorkursi AS nk, cawisuda AS c, jurusan AS j, administrasi AS ad, periode AS p
		WHERE nk.NPM = c.NPM AND c.idJurusan = j.idJurusan AND c.id_administrasi = ad.id_administrasi 
		AND ad.id_pend = p.id_pend AND nk.NPM ='$id'";
		return $this->db->query($sql);
	}
	function caridatakursipaging($id,$halaman,$batas){
		$sql="SELECT nk.NPM, c.nama, j.namaJurusan, p.Periode, nk.No_Kursi 
		FROM nomorkursi AS nk, cawisuda AS c, jurusan AS j, administrasi AS ad, periode AS p
		WHERE nk.NPM = c.NPM AND c.idJurusan = j.idJurusan AND c.id_administrasi = ad.id_administrasi 
		AND ad.id_pend = p.id_pend AND nk.NPM ='$id' limit $halaman,$batas";
		return $this->db->query($sql);
	}
	//=============================================================================
	function insertNowisuda($data){
		$this->db->insert('nomorkursi',$data);
	}
}

?>