<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_product extends CI_Model{
    
    public $table = 'product';
    public $id = 'id';

    public function all(){
        $hasil = $this->db->get($this->table);
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return array();
        }
    }
}
?>