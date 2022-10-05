<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    function __construct()
	{
		parent::__construct();
        $this->load->model("Usuario");
	}

    public function registroVendedor()
	{

		if ($this->input->post('btnGuardarVendedor')) {
			$email = $this->input->post('email');
			$password = $this->input->post('texto_password');

			$data = [
				"email" => $email
			];

			$userData = $this->Usuario->getUsuario($data);
			
			if ($email == $userData->email){
				$this->session->set_flashdata('error', 'Este correo ya esta en uso.');
				redirect(base_url() . "Login");		
			}else{

			$aceptado = $this->Usuario->guardarVendedor($email, password_hash($password, PASSWORD_DEFAULT));

                if($aceptado == 1){
					
				$this->session->set_flashdata('aceptado', 'Se registro correctamente el usuario.');
				redirect(base_url() . "Login");
			    }else{
					$this->session->set_flashdata('error', 'Tuvimos un error, intenta más tarde.');
					redirect(base_url() . "Login");	
				}
			}
			
		}else{

			$this->session->set_flashdata('error', 'Error al entrar');
					redirect(base_url() . "Login");
		}
			
		}
	}

