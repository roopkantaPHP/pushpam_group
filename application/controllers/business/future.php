<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Future extends CI_Controller{
  public function __construct(){
      parent::__construct();
  }
  public function index(){
    $data['contents']='business/future';
    $this->load->view('template', $data);
  }
}
