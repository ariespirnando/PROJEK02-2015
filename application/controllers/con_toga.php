<?php

class con_toga extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('Username')=="") {
			redirect('con_login');
		}
		$this->load->model(array('modtoga','modelLogin','modKeterangan','modJurusan'));
	}
	function index(){
		$config['base_url'] = base_url().'index.php/con_toga/index/';
       	$config['total_rows'] = $this->modtoga->pinjamtoga()->num_rows();
        $config['per_page'] = 8; 
		if(isset($_POST['btCari'])){
			$cari = $this->input->post('cari');
			$id = array('NPM'=>$cari);
			$hasil=  $this->modtoga->cek_input($id);
			if($hasil==0){
				echo "<script>alert('Data Tidak Ditemukan')
				location.href='con_toga'</script>";
			}
			else{
				$config['total_rows'] = $this->modtoga->caridata($cari)->num_rows();
				$this->pagination->initialize($config);
				$data['paging']     =$this->pagination->create_links();
        		$halaman            =  $this->uri->segment(3);
        		$halaman            =$halaman==''?0:$halaman;
				$data['pinjamtoga'] = $this->modtoga->caridatapaging($cari,$halaman,$config['per_page']);
				$this->template->load('Template_keuangan','Keuangan/laporan/Toga/laporantoga',$data);
			}		
		}
		else{	
		$this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
		$data['pinjamtoga'] = $this->modtoga->pinjamtogapaging($halaman,$config['per_page']);		
		$this->template->load('Template_keuangan','Keuangan/laporan/Toga/laporantoga',$data);
		}
	}
	function hapus(){
		$id= $this->uri->segment(3);
		$this->modtoga->hapus($id);
		redirect('con_toga');
	}
	function edittoga(){
		if(isset($_POST['edit'])){
			$id =$this->input->post('idperiod');
			$ukuran =$this->input->post('Ukuran');
			$ket =$this->input->post('Keterangan');

			/*echo $ket;
			echo $id;
			echo $ukuran;*/

			$data = array('Ukuran_toga'=>$ukuran,'id_ket'=>$ket);
			$this->modtoga->edit($data,$id);
			echo "<script>alert('Data peminjaman berhasil di Edit')
			location.href='./'</script>";
		}else{
			$id= $this->uri->segment(3);
			$data['keterangan'] = $this->modKeterangan->tampilketerangan()->result();
			$data['record'] = $this->modtoga->getout($id)->row_array();
			$this->template->load('Template_keuangan','Keuangan/laporan/Toga/edittoga',$data);

		}
	}
}
?>