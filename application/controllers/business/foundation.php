<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Foundation extends CI_Controller{
  public function __construct(){
      parent::__construct();
  }
  public function index(){
    $data['contents']='business/foundation';
    $data['page'] = 6;
    $this->load->view('template', $data);
  }
}
