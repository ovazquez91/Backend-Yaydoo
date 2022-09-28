<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

require_once("application/libraries/REST_Controller.php");
require_once("application/libraries/Format.php");

class Api extends REST_Controller {
    
    public function index_get(){



            $this->db->select('*');
            $this->db->from('t_producto');
            $query = $this->db->get();
            $data = $query->result();
            if(!$data){
                
                $this->response([
                    'status' => FALSE,
                    'message' => 'no data found'
                 ], REST_Controller::HTTP_NOT_FOUND);  
            }else{
            $this->response($data, REST_Controller::HTTP_OK);
            }

    }

}