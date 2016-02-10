<?php

class con_baaku extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('Username')=="") {
			redirect('con_login');
		}
		$this->load->model(array('modKeuangan','modjkKelamin','modJurusan','modpendaftaran','modtoga',
			'modFoto','modPriode','modBaaku','modelLogin','modStatus'));
	}
	//======================================================================================================================
	function noKursi(){
		$config['base_url']   = base_url().'index.php/con_baaku/noBaaku/';
       	$config['total_rows'] = $this->modpendaftaran->datakursi()->num_rows();
        $config['per_page']   = 5; 
        if(isset($_POST['btCari'])){
			$cari = $this->input->post('cari');
			$id = array('NPM'=>$cari);
			$hasil=  $this->modpendaftaran->cek_nokursi($id);
			if($hasil==0){
				echo "<script>alert('Data Tidak Ditemukan')
				location.href='noKursi'</script>";
			}
			else{
				
       			$config['total_rows'] = $this->modpendaftaran->caridatakursi($cari)->num_rows();
        		$this->pagination->initialize($config); 
        		$data['paging']     =$this->pagination->create_links();
        		$halaman            =  $this->uri->segment(3);
        		$halaman            =$halaman==''?0:$halaman;
				$data['recordmahasiswa'] = $this->modpendaftaran->caridatakursipaging($cari,$halaman,$config['per_page']);
				$this->template->load('Template_Baaku','Baaku/noKursi',$data);
				
			}
		}else{$this->pagination->initialize($config); 
        	$data['paging']       = $this->pagination->create_links();
        	$halaman              = $this->uri->segment(3);
        	$halaman              = $halaman==''?0:$halaman;
			$data['recordmahasiswa'] = $this->modpendaftaran->datakursipaging($halaman,$config['per_page']);
			$this->template->load('Template_Baaku','Baaku/noKursi',$data);
		}
	}

	//========================================================================================================================
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
			$this->template->load('Template_Baaku','Baaku/pengaturan');
		}
		$this->template->load('Template_Baaku','Baaku/pengaturan');
	}
	/*function index(){

		/*$ff = new graph();
        $ff->set_data( array(100,300,250) );
        $ff->bg_colour = '#f5f5f5';
        $ff->x_axis_colour( '#818D9D', '#ADB5C7' );
        $ff->y_axis_colour( '#818D9D', '#ADB5C7' );
        $ff->set_x_labels( array( 'Yudisium I','Yudisium II','Yudisium III') );
        $ff->set_y_max( 1000 );


        $ff->y_label_steps( 10 );
        $ff->set_y_legend( 'Jumlah Pendaftar', 12, '#3D5570' );
        $ff->set_x_legend( 'Periode', 12, '#3D5570' );
        $ff-
		$data['graph1'] = $this->modGrafik->grafik();
		$this->template->load('Template_Baaku','Baaku/grafik/grafik',$data);
	}*/
	function jadwal(){
		$data['recordData']=$this->modPriode->tampilperiodebaaku();
		$this->template->load('Template_Baaku','Baaku/jadwal',$data);
	}
	function editJadwal(){
		if(isset($_POST['edit'])){
			$per = $this->input->post('periode');
			$mul = $this->input->post('mulaipend');
			$akh = $this->input->post('akhirpend');
			$plk = $this->input->post('tglplks');
			$sts = $this->input->post('Status');
			$pnd = $this->input->post('idpend');
			$data = array('Periode'=>$per,'mulai_pendaftaran'=>$mul,'Akhir_pendaftaran'=>$akh,'tgl_pelaksanaan'=>$plk,'id_status'=>$sts);
			$this->modPriode->edit($data,$pnd);
			echo "<script>alert('Periode berhasil di Edit')
				location.href='jadwal'</script>";
		}else{
			$id = $this->uri->segment(3);
			$data['record'] = $this->modPriode->tampiledit($id)->row_array();
			$data['status'] = $this->modStatus->tampil()->result();
			$this->template->load('Template_Baaku','Baaku/editjadwal',$data);
		}
	}
	function laporanIT(){
		$config['base_url']   = base_url().'index.php/con_baaku/laporanIT/';
       	$config['total_rows'] = $this->modBaaku->datamahasiswaIT()->num_rows();
        $config['per_page']   = 5; 
        if(isset($_POST['btCari'])){
			$cari   =  $this->input->post('cari');
			$hasil  =  $this->modBaaku->datamahasiswaTahunITCheck($cari);
			if($hasil==0){
				echo "<script>alert('Data Tidak Ditemukan')
				location.href='laporanIT'</script>";
			}
			else{
				
       			$config['total_rows'] = $this->modBaaku->datamahasiswaTahunIT($cari)->num_rows();
        		$this->pagination->initialize($config); 
        		$data['paging']     =$this->pagination->create_links();
        		$halaman            =  $this->uri->segment(3);
        		$halaman            =$halaman==''?0:$halaman;
				$data['recordmahasiswa'] = $this->modBaaku->datamahasiswaTahunITpagging($cari,$halaman,$config['per_page']);
				$this->template->load('Template_Baaku','Baaku/Laporan/laporanIT',$data);
				
			}
		}else{$this->pagination->initialize($config); 
        	$data['paging']       = $this->pagination->create_links();
        	$halaman              = $this->uri->segment(3);
        	$halaman              = $halaman==''?0:$halaman;
			$data['recordmahasiswa'] = $this->modBaaku-> datamahasiswaITpagging($halaman,$config['per_page']);
			$this->template->load('Template_Baaku','Baaku/Laporan/laporanIT',$data);
		}
        
	}


	function laporanSI(){
		$config['base_url']   = base_url().'index.php/con_baaku/laporanSI/';
       	$config['total_rows'] = $this->modBaaku->datamahasiswaSI()->num_rows();
        $config['per_page']   = 5; 
        if(isset($_POST['btCari'])){
			$cari   =  $this->input->post('cari');
			$hasil  =  $this->modBaaku->datamahasiswaTahunSICheck($cari);
			if($hasil==0){
				echo "<script>alert('Data Tidak Ditemukan')
				location.href='laporanSI'</script>";
			}
			else{
				
       			$config['total_rows'] = $this->modBaaku->datamahasiswaTahunSI($cari)->num_rows();
        		$this->pagination->initialize($config); 
        		$data['paging']     =$this->pagination->create_links();
        		$halaman            =  $this->uri->segment(3);
        		$halaman            =$halaman==''?0:$halaman;
				$data['recordmahasiswa'] = $this->modBaaku->datamahasiswaTahunSIpagging($cari,$halaman,$config['per_page']);
				$this->template->load('Template_Baaku','Baaku/Laporan/laporanSI',$data);
				
			}
		}else{$this->pagination->initialize($config); 
        	$data['paging']       = $this->pagination->create_links();
        	$halaman              = $this->uri->segment(3);
        	$halaman              = $halaman==''?0:$halaman;
			$data['recordmahasiswa'] = $this->modBaaku->datamahasiswaSIpagging($halaman,$config['per_page']);
			$this->template->load('Template_Baaku','Baaku/Laporan/laporanSI',$data);
		}
	}
	function detail(){
		$id=  $this->uri->segment(3);
		$data['recorffoto'] = $this->modFoto->lihatfoto($id)->row_array();
		$data['record'] =  $this->modBaaku->getout($id)->row_array();
		$this->template->load('Template_Baaku','Baaku/detail',$data);
	}
	function edit(){
		if(isset($_POST['edit'])){
			$npm = $this->input->post('npm');
			$nama = $this->input->post('nama');
			$jurusan = $this->input->post('jurusan');
			$jk = $this->input->post('jk');
			$tmtlhr = $this->input->post('tmLahir');
			$tgllht = $this->input->post('tgllahir');
			$judul = $this->input->post('JudulTS');
			$tgllulus = $this->input->post('tgllulus');
			$almtskrang = $this->input->post('alamatsekarang');
			$almtasal = $this->input->post('alamatasal');
			$hp = $this->input->post('noHandphone');

			$dataWisuda =array('nama'=>$nama,'idJK'=>$jk,'tempatLahir'=>$tmtlhr,
							'tanggalLahir'=>$tgllht,'tanggalLulus'=>$tgllulus,'JudulTa'=>$judul,'idJurusan'=>$jurusan,
							'alamatsekarang'=>$almtskrang,'alamatasal'=>$almtasal,'HP'=>$hp);
			$this->modpendaftaran->edit($dataWisuda,$npm);
			echo "<script>alert('Data Pendaftaran berhasil di Edit')
				location.href='../con_baaku'</script>";
		}
		$id = $this->uri->segment(3);
		$data['jurusan']   = $this->modJurusan->tampil()->result();
		$data['jkKelamin'] = $this->modjkKelamin->tampil()->result();
		$data['record']    = $this->modBaaku->getoutEdit($id)->row_array();			
		$this->template->load('Template_Baaku','Baaku/edit',$data);

	}
	
	function index(){
		$config['base_url']   = base_url().'index.php/con_baaku/';
       	$config['total_rows'] = $this->modBaaku->datamahasiswa()->num_rows();
        $config['per_page']   = 5; 
        if(isset($_POST['btCari'])){
			$cari = $this->input->post('cari');
			$id = array('NPM'=>$cari);
			$hasil=  $this->modpendaftaran->cek_input($id);
			if($hasil==0){
				echo "<script>alert('Data Tidak Ditemukan')
				location.href='con_baaku'</script>";
			}
			else{
				
       			$config['total_rows'] = $this->modBaaku->datamahasiswaCari($cari)->num_rows();
        		$this->pagination->initialize($config); 
        		$data['paging']     =$this->pagination->create_links();
        		$halaman            =  $this->uri->segment(3);
        		$halaman            =$halaman==''?0:$halaman;
				$data['recordmahasiswa'] = $this->modBaaku->datamahasiswaCaripaging($cari,$halaman,$config['per_page']);
				$this->template->load('Template_Baaku','Baaku/viewlaporanpendaftaran',$data);
				
			}
		}else{$this->pagination->initialize($config); 
        	$data['paging']       = $this->pagination->create_links();
        	$halaman              = $this->uri->segment(3);
        	$halaman              = $halaman==''?0:$halaman;
			$data['recordmahasiswa'] = $this->modBaaku->datamahasiswapagging($halaman,$config['per_page']);
			$this->template->load('Template_Baaku','Baaku/viewlaporanpendaftaran',$data);
		}
        
	}
	
}


?>