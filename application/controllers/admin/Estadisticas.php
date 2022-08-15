<?php
class Estadisticas extends CI_Controller
{

	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
       if(!$this->session->userdata('admin'))
       redirect('admin');


	}
    function index()
    {
        $data['css'][] = '<link href="'  . base_url() . 'assets/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />';
		$data['css'][] = '<link href="'  . base_url() . 'assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" />';   
		
		$data['js'][] = '<script src="' . base_url() . 'assets/plugins/papaparse/papaparse.min.js" type="text/javascript"></script>';
		$data['js'][] = '<script src="' . base_url() . 'assets/plugins/datatables/datatables.min.js" type="text/javascript"></script>';
		$data['js'][] = '<script src="' . base_url() . 'assets/plugins/parsley/parsley.min.js" type="text/javascript"></script>';
		$data['js'][] = '<script src="' . base_url() . 'assets/plugins/datatables/lang/es.js" type="text/javascript"></script>';

		$data['js_page'] = '<script src="' . base_url() . 'assets/js/estadisticas.js?cid='. date('Ymdhis') .'" type="text/javascript"></script>';
        $this->load->view('admin/estadisticas', $data);
    }









    

    public function logout(){

        $this->session->sess_destroy();
        redirect('admin');
        
        }
}

