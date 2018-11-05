<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cadastros extends CI_Controller {

function _construct(){
parent_construct();

}

	public function cadastrocliente()
	{
		$this->load->view('cad_cliente');
	}
	
		public function adicionarcliente()
	{
		$this->load->view('add_cliente');
	}
	
	//------------------------------------------ 
	
		public function cadastroformapagamento()
	{
		$this->load->view('cad_formapagamento');
	}
	
		public function adicionarformapagamento()
	{
		$this->load->view('add_formapagamento');
	}
	//------------------------------------------
	
	
  	public function cadastroestado()
	{
		$this->load->view('cad_estado');
	}
	
		public function adicionarestado()
	{
		$this->load->view('add_estado');
	} 
	
//-----------------------------------
  	public function cadastroproduto()
	{
		$this->load->view('cad_produto');
	}
	
		public function adicionarproduto()
	{
		$this->load->view('add_produto');
	} 
	
//-----------------------------------
public function cadastroservicos()
{
	$this->load->view('cad_servicos');
}

	public function adicionarservicos()
{
	$this->load->view('add_servicos');
} 

	//-----------------------------------
	public function cadastromunicipio()
	{
		$this->load->view('cad_municipio');
	}
	
		public function adicionarmunicipio()
	{
		$this->load->view('add_municipio');
	} 
	
	//-----------------------------------
	public function cadastroveiculo()
	{
		$this->load->view('cad_veiculo');
	}
	
		public function adicionarveiculo()
	{
		$this->load->view('add_veiculo');
	} 
	
		//-----------------------------------
//		public function cadastrousuario()
//		{
//			$this->load->view('cad_usuario');
//		}
		
//			public function adicionarusuario()
//		{
//			$this->load->view('add_usuario');
//		} 
		
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */