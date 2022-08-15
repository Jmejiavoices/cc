<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A_Altas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    
    }



    function add_datos()
    {

        $usuarios = $_POST['usuarios'];
        
        for ($i = 0; $i < count($usuarios); $i++) {
            $usu = array(
                "name" => $usuarios[$i]['Nombre'],
                "ap" => $usuarios[$i]['Apellido_Paterno'],
                "am" => $usuarios[$i]['Apellido_Materno'],
                "edad" => $usuarios[$i]['Edad'],
                "email" => $usuarios[$i]['Email'],

            );

           
           if ($this->crud_model->insert_entry($usu)) {

               $data = array('responce' => 'success', 'message' => 'Carga Exitosa');
               
            } else {
               $data = array('responce' => 'error', 'message' => 'No se Agregaron los datos');
            }
        }
        echo json_encode($data);
    }
}
