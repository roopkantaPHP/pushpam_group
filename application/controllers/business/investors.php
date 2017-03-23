<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Investors extends CI_Controller{
  public function __construct(){
      parent::__construct();
  }
  public function index(){
    $data['contents']='business/investors';
    $data['page'] = 5;
    $this->load->view('template', $data);
  }
}
