<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class chamar extends CI_Controller {

function _construct(){
parent_construct();

}

	public function autentica()
	{
		$this->load->view('autenticar');
	}
	//-------------------------------
		public function paginaprincipal()
	{
		$this->load->view('principal');
	}

	//-------------------------------
	public function telacadastros()
	{
		$this->load->view('telacadastro');
	}


	//-------------------------------
	public function telapesquisas()
	{
		$this->load->view('telapesquisa');
	}
	
	//-------------------------------
	public function telarelatorios()
	{
		$this->load->view('telarelatorio');
	}





}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */