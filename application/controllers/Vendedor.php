 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedor extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model("Producto");
		
		
	}

	public function index()
	{   
	if ($this->session->userdata('tipo_usuario') == 2) {
        $this->load->view('vendedor/header.php');
		$this->load->view('vendedor/inicio.php');
        $this->load->view('vendedor/footer.php');
	}else{
	redirect(base_url() . "Login");
	}
	}

	public function Productos()
	{   
		if ($this->session->userdata('tipo_usuario') == 2) {

		$id_usuario = $this->session->userdata('id_usuario');
		$data['productos'] = $this->Producto->getProductos($id_usuario);
        $this->load->view('vendedor/header.php');
		$this->load->view('vendedor/productos.php', $data);
        $this->load->view('vendedor/footer.php');

		}else{
			$this->session->set_flashdata('error', 'Para acceder necesitas tener una cuenta.');
			redirect(base_url() . "Login");
		}
	}

	public function CrearProducto()
	{   
		if ($this->session->userdata('tipo_usuario') == 2) {
        $this->load->view('vendedor/header.php');
		$this->load->view('vendedor/crearProducto.php');
        $this->load->view('vendedor/footer.php');
		}else{
			$this->session->set_flashdata('error', 'Para acceder necesitas tener una cuenta.');
			redirect(base_url() . "Login");
		}
	}

	public function insertarProducto()
	{   
		if ($this->session->userdata('tipo_usuario') == 2) {

		$id_usuario = $this->session->userdata('id_usuario');	
		$nombre_producto = $this->input->post('nombre_producto');
		$sku = $this->input->post('sku');
		$cantidad = $this->input->post('cantidad');
		$precio = $this->input->post('precio');

		$aceptado = $this->Producto->guardarProducto($nombre_producto, $sku, $cantidad, $precio, $id_usuario);

                if($aceptado == 1){
				$this->session->set_flashdata('productoExitoso', 'Se registro correctamente el Producto.');
				redirect(base_url() . "Vendedor/CrearProducto");
			    }else{
					$this->session->set_flashdata('errorProducto', 'Tuvimos un error, intenta más tarde.');
					redirect(base_url() . "Vendedor/CrearProducto");	
				}

		}else{
			$this->session->set_flashdata('error', 'Para acceder necesitas tener una cuenta.');
			redirect(base_url() . "Login");
		}
	}


	}



	






