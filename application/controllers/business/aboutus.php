<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Aboutus extends CI_Controller{
  public function __construct(){
      parent::__construct();
  }

  public function index(){

    $data['contents'] = 'business/aboutus';
    $data['page'] = 2;
    $this->load->view('template', $data);
  }
}
