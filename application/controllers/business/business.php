<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Business extends CI_Controller{
  public function __construct(){
      parent::__construct();
  }

  public function index(){
    $business = $this->input->get('busi');
    $image_name = '';
    $business_name ='';
    switch($business){
      case'agri':
      $image_name = "agribusiness";
      $business_name ="AGRI BUSINESS";
      break;
      case'con':
      $image_name = "construction";
      $business_name ="CONSTRUCTION";
      break;
      case'real':
      $image_name = "realestate";
      $business_name ="REAL ESTATE";
      break;
      case'hos':
      $image_name = "hospitality";
      $business_name ="HOSPITALITY";
      break;
      case'it':
      $image_name = "it";
      $business_name ="IT";
      break;
      case'edu':
        $image_name = "EDUCATION";
        $business_name ="Education";
      break;
      case'heal':
        $image_name = "healthcare";
        $business_name ="HEALTHCARE";
      break;
      case'des':
        $image_name = "design_studio";
        $business_name ="DESIGN STUDIO";
      break;
      case'buil':
        $image_name = "building_materials";
        $business_name ="BUILDING MATERIALS";
      break;
      case'supp':
        $image_name = "supplychain";
        $business_name ="SUPPLY CHAIN AND WAREHOUSING";
      break;
      case'fmcg':
        $image_name = "fmcg";
        $business_name ="FMCG";
      break;
      case'eng':
        $image_name = "engineering";
        $business_name ="ENGINEERING AND TECHNICAL";
      break;
      default:
        $image_name = "agribusiness";
        $business_name ="AGRI BUSINESS";

    }
    $main_img_url = base_url().'assets/images/business/front_image/'.$image_name.".jpg";
    $data['image'] = $main_img_url;
    $data['business_name'] = $business_name;
    $data['contents']='business/business';
    $data['page'] = 3;
    $this->load->view('template', $data);
  }
}
