<?php 

class con_keuangan extends CI_Controller {
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('Username')=="") {
			redirect('con_login');
		}
		
		$this->load->model(array('modKeuangan','modpendaftaran','modelLogin','modPriode','modelRekening'));
		
	}
	function pengaturan(){
		if(isset($_POST['Edit'])){
			$usernamebaru = $this->input->post('UsernameBaru');
			$passwordbaru = $this->input->post('PasswordBaru');
			$usernameasal = $this->input->post('Username');
			$pasasal      = $this->input->post('password');

			$data = array('Username'=>$usernameasal,'Password'=>$pasasal);
            $log=  $this->modelLogin->login($data);
            if($log->num_rows() == 1){
            	$iduser = $this->session->userdata('IdUser');
            	$this->modelLogin->edituser($usernamebaru,$passwordbaru,$usernameasal,$pasasal,$iduser);
            	echo "<script>alert('Username dan Password telah diubah')
				location.href='./'</script>";

            }
            else{
            		echo "<script>alert('Username lama dan Password lama tidak cocok')
				location.href='pengaturan'</script>";
            }
		}else{
			$this->template->load('Template_keuangan','Keuangan/pengaturan');
		}
		
	}
	function index(){
		$config['base_url'] = base_url().'index.php/con_keuangan/index/';
       	$config['total_rows'] = $this->modKeuangan->tampildata()->num_rows();
        $config['per_page'] = 5; 
		if(isset($_POST['btCari'])){
			$cari = $this->input->post('cari');
			//$id = array('id_administrasi'=>$cari);
			//$ids = array('Npm'=>$cari);
			$hasil=  $this->modKeuangan->cek_inputdt($cari);
			//$hasils=  $this->modKeuangan->cek_input($ids);
			if($hasil==0){
				echo "<script>alert('Data Tidak Ditemukan')
				location.href='con_keuangan'</script>";
			}
			else{
				
       			$config['total_rows'] = $this->modKeuangan->caridata($cari)->num_rows();
        		$this->pagination->initialize($config); 
        		$data['paging']     =$this->pagination->create_links();
        		$halaman            =  $this->uri->segment(3);
        		$halaman            =$halaman==''?0:$halaman;
				$data['record_keuangan'] = $this->modKeuangan->caridatapaging($cari,$halaman,$config['per_page']);
				$this->template->load('Template_keuangan','Keuangan/viewAdministrasi',$data);
				
			}
			
		}else{	
        	$this->pagination->initialize($config); 
        	$data['paging']     =$this->pagination->create_links();
        	$halaman            =  $this->uri->segment(3);
        	$halaman            =$halaman==''?0:$halaman;
			$data['record_keuangan'] = $this->modKeuangan->tampildatapaging($halaman,$config['per_page']);
			$this->template->load('Template_keuangan','Keuangan/viewAdministrasi',$data);
		}

	}
	function laporanyud(){
		$config['base_url'] = base_url().'index.php/con_keuangan/laporanyud/';
       	$config['total_rows'] = $this->modKeuangan->lapyud()->num_rows();
        $config['per_page'] = 5; 
        if(isset($_POST['btCari'])){
			$cari = $this->input->post('cari');
			$hasil=  $this->modKeuangan->carilapyudcek($cari);
			if($hasil==0){
				echo "<script>alert('Data Tidak Ditemukan')
				location.href='laporanyud'</script>";
			}
			else{
				
       			$config['total_rows'] = $this->modKeuangan->carilapyud($cari)->num_rows();
        		$this->pagination->initialize($config); 
        		$data['paging']     =$this->pagination->create_links();
        		$halaman            =  $this->uri->segment(3);
        		$halaman            =$halaman==''?0:$halaman;
				$data['data_yud'] = $this->modKeuangan->carilapyudpaging($cari,$halaman,$config['per_page']);
				$this->template->load('Template_keuangan','Keuangan/laporan/laporanyudi',$data);
				
			}
			
		}else{
			$this->pagination->initialize($config); 
        	$data['paging']     =$this->pagination->create_links();
        	$halaman            =  $this->uri->segment(3);
        	$halaman            =$halaman==''?0:$halaman;
        	$data['data_yud'] = $this->modKeuangan->lapyuddatapaging($halaman,$config['per_page']);
			$this->template->load('Template_keuangan','Keuangan/laporan/laporanyudi',$data);
		}
	}
	function laporanwis(){
		$config['base_url'] = base_url().'index.php/con_keuangan/laporanwis/';
       	$config['total_rows'] = $this->modKeuangan->lapwis()->num_rows();
        $config['per_page'] = 5; 
        if(isset($_POST['btCari'])){
			$cari = $this->input->post('cari');
			$hasil=  $this->modKeuangan->Carilapwischek($cari);
			if($hasil==0){
				echo "<script>alert('Data Tidak Ditemukan')
				location.href='laporanwis'</script>";
			}
			else{
				$config['total_rows'] = $this->modKeuangan->Carilapwis($cari)->num_rows();
        		$this->pagination->initialize($config); 
        		$data['paging']     =$this->pagination->create_links();
        		$halaman            =  $this->uri->segment(3);
        		$halaman            =$halaman==''?0:$halaman;
				$data['data_wis'] = $this->modKeuangan->Carilapwispagging($cari,$halaman,$config['per_page']);
				$this->template->load('Template_keuangan','Keuangan/laporan/laporanwis',$data);
			}
		}else{
			$this->pagination->initialize($config); 
        	$data['paging']     =$this->pagination->create_links();
        	$halaman            =  $this->uri->segment(3);
        	$halaman            =$halaman==''?0:$halaman;
        	$data['data_wis'] = $this->modKeuangan->lapwisdatapaging($halaman,$config['per_page']);
			$this->template->load('Template_keuangan','Keuangan/laporan/laporanwis',$data);
		}
	}
	function hapus(){
		$id= $this->uri->segment(3);

		$idAdm = array('id_administrasi'=>$id);
		$ceks=  $this->modpendaftaran->cek_input($idAdm);
		if($ceks==0){
			$this->modKeuangan->hapus($id);
			echo "<script>alert('Data Berhasil Dihapus')
					location.href='../'</script>";
		}else{
			echo "<script>alert('No administrasi tidak dapat dihapus')
					location.href='../'</script>";
		}
		
	}
	function tambah(){
		if(isset($_POST['simpan'])){
			$adm = $this->input->post('Administrasi');
			$rek = $this->input->post('Rekening');
			$Jum = $this->input->post('Jumlah');
			$tag = $this->input->post('Tanggal');
			$npm = $this->input->post('NPM');
			$nma = $this->input->post('Nama');
			$sem = $this->input->post('Semester');
			$pri = $this->input->post('Priode');
			$thn = $this->input->post('Tahun');
			if($adm=="" || $rek=="" || $npm=="" || $nma==""){
				echo "<script>alert('Data Masih Kosong')
					location.href='tambah'</script>";
			}
			else{
				$id = array('id_administrasi'=>$adm);
				$hasil=  $this->modKeuangan->cek_input($id);
				if($hasil==0){
					$cek = $this->modPriode->cekstatus($pri);
					if($cek==1){
						$data = array('id_administrasi'=>$adm,'id_rekening'=>$rek,'jumlahBayar'=>$Jum,'tanggalBayar'=>$tag,
							'Npm'=>$npm,'Nama'=>$nma,'Semester'=>$sem,'id_pend'=>$pri,'TahunAkademik'=>$thn);
						$this->modKeuangan->simpan($data);
						$this->modelLogin->insertMahasiswaa($npm,$adm);
						echo "<script>alert('Data Sudah Disimpan')
						location.href='../con_keuangan'</script>";
					}else{
						echo "<script>alert('Periode pendaftaran tidak aktif')
						location.href='tambah'</script>";
					}
            	}
            	else{
            		echo "<script>alert('DUPLIKASI DATA')
					location.href='tambah'</script>";
            	}
			}
		}
		else{
			$data['priode'] = $this->modPriode->tamplipriode()->result();
			$data['rekening'] = $this->modelRekening->tampil()->result();
			$data['noadm']= $this->modKeuangan->getkodeadm();
			$this->template->load('Template_keuangan','Keuangan/tambahAdministrasi',$data);
		}
		
	}
	function edit(){
		if(isset($_POST['edit'])){
			$adm = $this->input->post('Administrasi');
			$rek = $this->input->post('Rekening');
			$Jum = $this->input->post('Jumlah');
			$tag = $this->input->post('Tanggal');
			$npm = $this->input->post('NPM');
			$nma = $this->input->post('Nama');
			$sem = $this->input->post('Semester');
			$pri = $this->input->post('Priode');
			$thn = $this->input->post('Tahun');
			$data = array('id_rekening'=>$rek,'jumlahBayar'=>$Jum,'tanggalBayar'=>$tag,
				'Npm'=>$npm,'Nama'=>$nma,'Semester'=>$sem,'id_pend'=>$pri,'TahunAkademik'=>$thn);
			$this->modKeuangan->edit($data,$adm);
			redirect('con_keuangan');
		}
		else{
			$id=  $this->uri->segment(3);
			$data['priode'] = $this->modPriode->tamplipriode()->result();
			$data['rekening'] = $this->modelRekening->tampil()->result();
			$data['record'] =  $this->modKeuangan->getout($id)->row_array();
			$this->template->load('Template_keuangan','Keuangan/editAdministrasi',$data);
		}	
	}
}

?>