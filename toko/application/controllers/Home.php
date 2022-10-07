<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("Model_product");
    }
    public function index(){
        $data['barang'] = $this->Model_product->all();
        $this->load->view("beranda/main",$data);
    }
    public function add_to_cart($product_id)
    {
        
    }
}
?>