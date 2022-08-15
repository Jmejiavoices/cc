<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class A_Dashboard extends CI_Controller
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

            $res = $this->crud_model->insert_entry($usu);
            if (!$res) {

                header('HTTP/1.1 500 ' . utf8_decode('error'));
                header('Content-Type: application/json; charset=UTF-8');
                die(json_encode(array('message' => 'error', 'code' => 500)));
            }
        }
    }
}
