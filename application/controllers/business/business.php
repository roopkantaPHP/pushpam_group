<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Business extends CI_Controller{
  public function __construct(){
      parent::__construct();
  }

  public function index(){
    $data['contents']='business/business';
    $data['page'] = 3;
    $this->load->view('template', $data);
  }
}
