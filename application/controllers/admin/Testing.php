<?php
class Testing extends CI_Controller
{

	 function __construct()
	{
		parent::__construct();

		$this->load->library('unit_test');
      //  if ($this->session->userdata('admin'))
     // redirect('admin/dashboard');


	}
    function index()
    {


		$this->unit->run(suma(10,90),100,"Testeando Funcion suma");
		$this->load->view('admin/test');

    }



}

function suma($a, $b){

	return $a + $b;
}