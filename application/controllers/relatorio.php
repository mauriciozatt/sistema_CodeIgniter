<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class relatorio extends CI_Controller {

function _construct(){
parent_construct();

}

	public function relatorioclientes()
	{
		$this->load->view('rel_cliente');
	}
	

	
	public function relatorioprodutos()
	{
		$this->load->view('rel_produto');
	}
	
	
	public function relatorioservicos()
	{
		$this->load->view('rel_servicos');
	}
	
	public function relatoriosforma()
	{
		$this->load->view('rel_forma');
	}

	public function relatoriosacompanhamento()
	{
		$this->load->view('rel_companhamento');
	}

	public function relatorioestado()
	{
		$this->load->view('rel_estado');
	}
		
	public function relatoriomunicipio()
	{
		$this->load->view('rel_municipio');
	}

	public function relatorioveiculo()
	{
		$this->load->view('rel_veiculo');
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */