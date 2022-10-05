<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model("Producto");
		$this->load->model("Usuario");
	}

	public function index()
	{   

       if ($this->session->userdata('tipo_usuario') == 1) {
            
			$this->load->view('admin/header.php');
			$this->load->view('admin/inicio.php');
        	$this->load->view('admin/footer.php');
			
				
        } else {
		$this->session->set_flashdata('error', 'Para acceder necesitas tener una cuenta.');	
		redirect(base_url() . "Login");

        }
		

	}

	public function Filtrado()
	{   

       if ($this->session->userdata('tipo_usuario') == 1) {
            
			$data['productos'] = $this->Producto->getAllProductos();
			$data['usuarios'] = $this->Usuario->getAllUsuarios();
			$this->load->view('admin/headerFiltro.php', $data);
			$this->load->view('admin/proveedores.php', $data);
        	$this->load->view('admin/footer.php');
			
				
        } else {
		$this->session->set_flashdata('error', 'Para acceder necesitas tener una cuenta.');
		redirect(base_url() . "Login");

        }
		

	}


	

	
}