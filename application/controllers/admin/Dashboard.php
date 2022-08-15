<?php
class Dashboard extends CI_Controller
{

	 function __construct()
	{
		parent::__construct();
		$this->load->helper('file');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('crud_model');
       if(!$this->session->userdata('admin'))
       redirect('admin');


	}
    function index()
    {
		
		$data['css'][] = '<link href="'  . base_url() . 'assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" />';  
	
		$data['js'][] = '<script src="' . base_url() . 'assets/plugins/papaparse/papaparse.min.js" type="text/javascript"></script>';
		$data['js'][] = '<script src="' . base_url() . 'assets/plugins/datatables/datatables.min.js" type="text/javascript"></script>';
		$data['js'][] = '<script src="' . base_url() . 'assets/plugins/parsley/parsley.min.js" type="text/javascript"></script>';
		$data['js'][] = '<script src="' . base_url() . 'assets/plugins/datatables/lang/es.js" type="text/javascript"></script>';

		$data['js_page'] = '<script src="' . base_url() . 'assets/js/altas.js?cid='. date('Ymdhis') .'" type="text/javascript"></script>';
        $this->load->view('admin/dashboard', $data);
		
    }









	public function fetch()
	{
		if ($this->input->is_ajax_request()) {
			if ($posts = $this->crud_model->get_entries()) {
				$data = array('responce' => 'success', 'posts' => $posts);
			} else {
				$data = array('responce' => 'error', 'message' => 'No se pueden Mostrar los registros');
			}
			echo  json_encode($data);
		} else {

			echo "No direct script access allowed";
		}
	}

    public function insert()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('ap', 'ap', 'required');
			$this->form_validation->set_rules('am', 'am', 'required');
			$this->form_validation->set_rules('edad', 'edad', 'required');
			$this->form_validation->set_rules('email', 'email', 'required|valid_email');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {

				$ajax_data =  $this->input->post();
				if ($this->crud_model->insert_entry($ajax_data)) {

					$data = array('responce' => 'success', 'message' => 'Usuario Agregado con Éxito');
				} else {
					$data = array('responce' => 'error', 'message' => 'No se Agrego el Usuario');
				}
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	
	public function delete()
	{

		if ($this->input->is_ajax_request()) {
			$del_id = $this->input->post('del_id');
			if ($this->crud_model->delete_entry($del_id)) {
				$data = array('responce' => 'success');
			} else {
				$data = array('responce' => 'error');
			}

			echo json_encode($data);
		} else {

			echo "No direct script access allowed";
		}
	}

	public function edit()
	{

		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post('edit_id');

			if ($post =	$this->crud_model->edit_entry($edit_id)) {
				$data = array('responce' => 'success', 'post' => $post);
			} else {
				$data = array('responce' => 'error', 'message' => 'No se pueden Mostrar los registros');
			}

			echo json_encode($data);
		} else {

			echo "No direct script access allowed";
		}
	}

	public function update()
	{

		if ($this->input->is_ajax_request()) {


			$this->form_validation->set_rules('edit_name', 'name', 'required');
			$this->form_validation->set_rules('edit_ap', 'ap', 'required');
			$this->form_validation->set_rules('edit_am', 'am', 'required');
			$this->form_validation->set_rules('edit_edad', 'edad', 'required');
			$this->form_validation->set_rules('edit_email', 'email', 'required|valid_email');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {

				$data['id'] = $this->input->post('edit_record_id');
				$data['name'] = $this->input->post('edit_name');
				$data['ap'] = $this->input->post('edit_ap');
				$data['am'] = $this->input->post('edit_am');
				$data['edad'] = $this->input->post('edit_edad');
				$data['email'] = $this->input->post('edit_email');
				if ($this->crud_model->update_entry($data)) {

					$data = array('responce' => 'success', 'message' => 'Usuaio Actualizado con Éxito');
				} else {
					$data = array('responce' => 'error', 'message' => 'No se Actualizó el Usuario');
				}
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
   

    public function logout()
	{

        $this->session->sess_destroy();
        redirect('admin');
        
    }
}

