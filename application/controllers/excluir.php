<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class excluir extends CI_Controller {

function _construct(){
parent_construct();

}


	public function excluircliente()
	{
		$this->load->view('excluirCliente');
	}
	
	
	public function excluirproduto()
	{
		$this->load->view('excluirProduto');
	}


	public function excluirservico()
	{
		$this->load->view('excluirServico');
	}

	public function excluirforma()
	{
		$this->load->view('excluirForma');
	}

	
	public function excluirestado()
	{
		$this->load->view('excluirEstado');
	}
	
	
	public function excluirmunicipio()
	{
		$this->load->view('excluirMunicipio');
	}
	
	
	public function excluirveiculo()
	{
		$this->load->view('excluirVeiculo');
	}










	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */