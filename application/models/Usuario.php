<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model{
  public $table = "t_usuarios";

public function getUsuario($data){
  $query =  $this->db->get_where($this->table,$data,1)->row();
  return $query;
}

  public function guardarVendedor($email, $password)
	{
            $data = [
                "password"  => $password,
                "email" => $email,
                "tipo_usuario" => 2

            ];
            $this->db->insert('t_usuarios', $data);
            /*$error = $this->db->error();
              if ($error['code'] == 1062) {
                  redirect('Login');
              }*/
            return 1;
  }

  public function getAllUsuarios(){
    $this->db->select('*');
    $this->db->from('t_usuarios');
    $this->db->where('tipo_usuario = 2');
    $query = $this->db->get();
    return $query->result();
  }



}
?>