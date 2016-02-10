<?php


class con_login extends CI_Controller{
	
	 function __construct() {
        parent::__construct();
        $this->load->model(array('modelLogin','modpendaftaran'));
    }
	function index(){

		if(isset($_POST['submit'])){
            
            // proses login disini
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $data = array('Username'=>$username,'Password'=>$password);
            $log=  $this->modelLogin->login($data);
            if($log->num_rows() == 1)
            {
                foreach ($log->result() as $sess) {
                    $sess_data['logged_in'] = 'Sudah Loggin';
                    $sess_data['IdUser'] = $sess->IdUser;
                    $sess_data['Username'] = $sess->Username;
                    $sess_data['Idtype'] = $sess->Idtype;
                    $this->session->set_userdata($sess_data);
                }
                if ($this->session->userdata('Idtype')==1) {
                    echo "<script>alert('Welcome In SIPYuda')
                    location.href='con_keuangan'</script>";
                }
                elseif ($this->session->userdata('Idtype')==2) {
                    echo "<script>alert('Welcome In SIPYuda')
                    location.href='con_baaku'</script>";
                } 
                elseif ($this->session->userdata('Idtype')==3) {
                    echo "<script>alert('Welcome In SIPYuda')</script>";
                    redirect('#');
                } 
                elseif ($this->session->userdata('Idtype')==4) {
                    $idnpm = array('NPM'=>$username);
                    $cek=  $this->modpendaftaran->cek_input($idnpm);
                    if($cek==1){
                            echo "<script>alert('Password Sudah Digunakan Hubungi Administrator')
                            location.href='con_login'</script>";
                    }else{
                        echo "<script>alert('Welcome In SIPYuda')
                        location.href='con_pendaftaran'</script>";
                    }
                }   
            }
            else{
             echo "<script>alert('Username dan Password Tidak ada')
                    location.href='con_login'</script>";
            }
        }
        else{
            $this->load->view('login');
        }
	}
	function logout()
    {
        $this->session->unset_userdata('Username');
        $this->session->unset_userdata('Idtype');
        session_destroy();
         echo "<script>alert('Terimakasih sudah menggunakan aplikasi Ini :)')
                    location.href='../con_login'</script>";
    }	
}

?>