<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class edita extends CI_Controller {

function _construct(){
parent_construct();

}


	public function editacliente()
	{
		$this->load->view('editaCliente');
	}


//-----------------------------------------
	
	
	public function editaproduto()
	{
		$this->load->view('editaProduto');
	}
	
//-----------------------------------------
		
public function editaservico()
{
	$this->load->view('editaServico');
}

	
//-----------------------------------------
		
public function editaforma()
{
	$this->load->view('editaForma');
}


//-----------------------------------------
		
public function editaestado()
{
	$this->load->view('editaEstado');
}


	
//-----------------------------------------
		
public function editamunicipio()
{
	$this->load->view('editaMunicipio');
}



	
//-----------------------------------------
		
public function editaveiculo()
{
	$this->load->view('editaVeiculo');
}













	
}

/* End of file welcome.php */
/* Location: ./application/controllers/primeiro.php */