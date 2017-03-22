<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Media extends CI_Controller{
  public function __construct(){
      parent::__construct();
  }
  public function index(){
    $data['contents']='business/media';
    $this->load->view('template', $data);
  }
}
