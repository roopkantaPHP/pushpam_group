<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        /*Define single page content as usual*/
        $toView['page_content'] = date("H:i:s");
        $toView['title'] = "Pushpam group";
        /*short cut to load->view("pages/page_name",$content,true)*/
        // $this->build_content($toView);
        //  $this->load->view('pages/homepage',true);
         $data['contents']  = 'pages/homepage';
         $data['page'] = 1;
         $this->load->view('template', $data);

        // $this->render_page();
    }
}

/*End of file homepage.php*/
/*Location .application/controllers/example.php*/
