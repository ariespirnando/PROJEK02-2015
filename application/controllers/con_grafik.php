<?php

class con_grafik extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('Username')=="") {
			redirect('con_login');
		}
		$this->load->model(array('modGrafik'));
	}
	function index(){
		$data = array(
			'Y1'=>$this->modGrafik->grafik1(),
			'Y2'=>$this->modGrafik->grafik2(),
			'Y3'=>$this->modGrafik->grafik3());

		$this->template->load('Template_Baaku','Baaku/grafik/grafik');

	}

}	
	

?>