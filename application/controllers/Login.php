<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model("Usuario");
	}

	public function index()
	{   
		$this->load->view('login');
	}

	
 
	public function Entrar()
	{
		$correo = $this->input->post('email');
		$pwd = $this->input->post('password');

		// VALIDAMOS QUE LA PETICIÓN VENGA DE UN POST
		if ($this->input->post("btnAccesar") === "valid") {
			
			if ($correo != "" && $pwd != "") {

				$data = [
					"email" => $correo
				];

				$userData = $this->Usuario->getUsuario($data);
				// validamos los datos
				if (isset($userData)) {
					if ($correo == $userData->email && password_verify($pwd, $userData->password) == $userData->password) {
						
						if ($userData->tipo_usuario == 1) {
							// REDIRIGIMOS Administrador
							$session_data = [
								"email" => $userData->email,
								"tipo_usuario" => $userData->tipo_usuario,
								"id_usuario" => $userData->id_usuario
							];
							$this->session->set_userdata($session_data);
							redirect(base_url() . 'Admin');
						} // if
						else if($userData->tipo_usuario == 2){
						   // REDIRIGIMOS A Vendedor
							$session_data = [
								"email" => $userData->email,
								"tipo_usuario" => $userData->tipo_usuario,
								"id_usuario" => $userData->id_usuario
							];
							$this->session->set_userdata($session_data);
							redirect(base_url() . 'Vendedor');

						}

					} else {
						$this->session->set_flashdata('error', 'Estan incorrectas la contraseña y el usuario, vuelva a intentarlo.');
						redirect(base_url() . "Login");
					} // else
				} // if
				else {
					$this->session->set_flashdata('error', 'No se encontro información de su Usuario');
					redirect(base_url() . "Login");
				}
			} // IF
			else {
				$this->session->set_flashdata('error', 'Ingrese contraseña y correo');
			redirect(base_url() . "Login");
			} // else
		} // if btn VALID
		else {
			$this->session->set_flashdata('error', 'Fallo al logera Usuario');
			redirect(base_url() . "Login");
		} 
	} // signIn

	public function Salir()
	{
		$this->session->sess_destroy();
    $this->session->set_userdata(array('user_name' => '', 'is_logged_in' => ''));
    redirect('Login');
	}
}