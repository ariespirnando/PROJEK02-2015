<?php

class con_pendaftaran extends CI_Controller {
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('Username')=="") {
			redirect('con_login');
		}
		$this->load->model(array('modKeuangan','modjkKelamin','modBaaku','modJurusan','modpendaftaran','modtoga','modFoto','modPriode'));
	}
	/*function logout(){
		echo "<script>alert('Terima kasihtelah melakukan pendaftaran :)')
		location.href='<?php echo base_url()?>index.php/con_login/logout'</script>";
	}*/
	function cetakpendaftaran(){
		$id= $this->uri->segment(3);
		if(isset($_POST['cetak'])){
			$npm = $this->input->post('npm');
			$data['cetak']= $this->modpendaftaran->cetak($npm)->row_array();
		}else{
			$data['cetak']= $this->modpendaftaran->cetak($id)->row_array();
		    $this->template->load('Template_mahasiswa','Wisudawan/Cetak_pendaftaran',$data);
		}
	}
	function index(){
		$this->template->load('Template_mahasiswa','Wisudawan/homeMahsiswa');
	}
	function info(){
		$data['recordData']=$this->modPriode->tamplipriode();
		$this->template->load('Template_mahasiswa','Wisudawan/info',$data);
	}
	function lengkap(){
		$this->template->load('Template_mahasiswa','Wisudawan/homeLengkap');
	}
	/*function cetak(){

		$this->load->library('cfpdf');
		$pdf = new FPDF('p','mm','a4');
		$pdf->Output();

		//redirect('con_login/logout');
	}*/
	function tambah(){
		if(isset($_POST['simpan'])){
			$adm = $this->input->post('Administrasi');
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
			//$foto = $this->input->post();
			$uktoga = $this->input->post('ukuran');
			$tglpinjam = $this->input->post('Tanggalpinjam');
			$tglpulang = $this->input->post('TanggalPulang');

			/*echo $almtskrang."\n";
			echo $almtasal."\n";
			echo $hp."\n";
			echo $uktoga."\n";
			echo $tglpinjam."\n";
			echo $tglpulang."\n";*/

			if($adm=="" ||  $npm=="" || $nama=="" || $jurusan=="" || $jk=="" || $tmtlhr =="" || $tgllht=="" || $judul=="" || $tgllulus==""){
				echo "<script>alert('Lengkapi data terlebih dahulu')
					location.href='tambah'</script>";
			}
			else{
				if(isset($_POST['ck1'])){
					$idAdm = array('id_administrasi'=>$adm);
					$hasil=  $this->modKeuangan->cek_input($idAdm);
					$perio=  $this->modKeuangan->cekpriodependadm($adm);
					if($hasil==1 && $perio==1){
						$idnpm = array('NPM'=>$npm);
						//$cek=  $this->modpendaftaran->cek_input($idnpm);
						$ceks=  $this->modpendaftaran->cek_input($idAdm);
						if($ceks==1){
							echo "<script>alert('No Administrasi / NPM Mahasiswa telah terdaftar !!!')
								location.href='tambah'</script>";
						}else{

							$dataWisuda =array('NPM'=>$npm,'nama'=>$nama,'idJK'=>$jk,'tempatLahir'=>$tmtlhr,
							'tanggalLahir'=>$tgllht,'tanggalLulus'=>$tgllulus,'JudulTa'=>$judul,'idJurusan'=>$jurusan,
							'alamatsekarang'=>$almtskrang,'alamatasal'=>$almtasal,'HP'=>$hp,'id_administrasi'=>$adm);

							$dataToga=array('NPM'=>$npm,'Ukuran_toga'=>$uktoga,'tgl_peminjaman'=>$tglpinjam,'tgl_pemulangan'=>$tglpulang,'id_ket'=>'1');

							$nk = $this->modpendaftaran->noKursi();	

							$nomorkursi = array('NPM'=>$npm,'No_Kursi'=>$nk);

							$nmfile = "file_".time(); 
       						$config['upload_path'] = './assets/Upload/'; 
        					$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
        					$config['max_size'] = '2048'; 
        					$config['max_width']  = '1288'; 
        					$config['max_height']  = '768'; 
        					$config['file_name'] = $nmfile; 
							$this->upload->initialize($config);

						/* -----------------------------------------------------------------------------------------------------*/
							if($this->upload->do_upload('upload')){
								$foto = $this->upload->data();
								$datafoto = array('NPM'=>$npm,'foto_wisuda'=>$foto['file_name']);	
								$this->modpendaftaran->simpanPendaftar($dataWisuda);
								$this->modtoga->simpanpinjamToga($dataToga);
								$this->modFoto->simpanfoto($datafoto);
								$this->modpendaftaran->insertNowisuda($nomorkursi);
								echo "<script>alert('Data Berhasil di daftarkan, Cetak bukti pendaftran')
								location.href='cetakpendaftaran/$npm'</script>";
							}
							else{							
								echo "<script>alert('Format Foto Salah')
								location.href='tambah'</script>";
							}
							
						}
            		}
            		else{
            			echo "<script>alert('NO Administrasi Tidak Aktif atau Tidak ditemukan ,Hubungi Bagian Keuangan !!')
						location.href='tambah'</script>";
            		}
				}
				else{
					echo "<script>alert('Anda belum melakukan validasi data')
					location.href='tambah'</script>";
				}
				
			}
		}else{
			$data['jurusan'] = $this->modJurusan->tampil()->result();
			$data['jkKelamin'] = $this->modjkKelamin->tampil()->result();
			$data['administrasi'] = $this->modKeuangan->tampildata()->result();
			$this->template->load('Template_mahasiswa','Wisudawan/daftarwisuda',$data);
		}

	}

	
}

?>
