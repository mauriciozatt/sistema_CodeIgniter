<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pesquisas extends CI_Controller {

function _construct(){
parent_construct();

}

	public function pesquisacliente()
	{
		$this->load->view('pesquisaCliente');
	}
	
	//--------------------------------------	
	public function pesquisaproduto()
	{
		$this->load->view('pesquisaProduto');
	}


	//--------------------------------------
	
	public function Pesquisaservico()
	{
		$this->load->view('PesquisaServico');
	}

//--------------------------------------

	
	public function Pesquisaforma()
	{
		$this->load->view('PesquisaForma');
	}

//--------------------------------------
	
public function Pesquisaacompanhamento()
{
	$this->load->view('PesquisaAcompanhamento');
}

//--------------------------------------

public function pesquisaestado()
{
	$this->load->view('pesquisaEstado');
}
	
	//--------------------------------------
	
	public function Pesquisamunicipio()
	{
		$this->load->view('PesquisaMunicipio');
	}
	
	//--------------------------------------
	
	public function Pesquisaveiculo()
	{
		$this->load->view('PesquisaVeiculo');
	}









	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */