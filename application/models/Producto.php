<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Model{
 
  public function guardarProducto($nombre_producto, $sku, $cantidad, $precio, $id_usuario)
	{
            $data = [
                "nombre_producto"  => $nombre_producto,
                "sku" => $sku,
                "cantidad" => $cantidad,
                "precio" => $precio,
                "id_usuario" => $id_usuario

            ];
            $this->db->insert('t_producto', $data);
            /*$error = $this->db->error();
              if ($error['code'] == 1062) {
                  redirect('Login');
              }*/
            return 1;
  }

  public function getProductos($idUsuario){
    $this->db->select('*');
    $this->db->from('t_producto');
    $this->db->where('id_usuario', $idUsuario);
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllProductos(){
    $this->db->select('*');
    $this->db->from('t_producto');
    $query = $this->db->get();
    return $query->result();
  }


}
?>