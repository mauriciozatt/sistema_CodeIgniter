<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class atualiza extends CI_Controller {

function _construct(){
parent_construct();

}


	public function atualizarcliente()
	{
		$this->load->view('atualizarCliente');
	}

//------------------------------------------

	public function atualizarproduto()
	{
		$this->load->view('atualizarProduto');
	}


//------------------------------------------
public function atualizarservico()
{
	$this->load->view('atualizarServico');
}
//------------------------------------------
public function atualizarforma()
{
	$this->load->view('atualizarforma');
}




//------------------------------------------
	public function atualizarestado()
	{
		$this->load->view('atualizarEstado');
	}


	public function atualizarmunicipio()
	{
		$this->load->view('atualizarMunicipio');
	}
	
	public function atualizarveiculo()
	{
		$this->load->view('atualizarVeiculo');
	}





	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */