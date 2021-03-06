<!Doctype>
<html>
<head>
  <META http-equiv="X-UA-Compatible" content="IE=10" />
  <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <META HTTP-EQUIV="Content-Language" CONTENT="fr-FR">
  <META name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/business/common.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/business/chrome.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/business/mozilla.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/business/screen1920.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/business/timeline.css');?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/business/cntl.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
  <script src="assets/js/business/jquery.cntl.js"></script>
  <div class="sub_header">
   <p class="sub_head_text pushpam_font" >Hey there! Welcome to pushpam group</p>
    <ul class="ul_sub_menu">
      <li class="login pushpam_text_green pushpam_font">
        Login/Register
      </li>
      <li>
        <a class="career_button btn pushpam_font">Careers </a>
      </li>
    </ul>
    </div>
    <div class="col l12 m12 s12">
      <nav id="pushpam_bg_nav2" class=" border">
        <div class="nav-wrapper">
     <!-- <a id="logo-container" href="<?php echo base_url(); ?>" class="brand-logo"> -->
       <object id="front-page-logo" class="responsive-img" data="assets/images/test/logo.png" style="width:7%; margin-left:8%">
       </object>
     <!-- </a> -->
       <ul id="nav-mobile"  class="right menu_pus">

         <li class="<?php if($page == 1){echo "active";}else{ echo "";}?>"><a class="tabbuttons"  href="<?php echo base_url();?>">Home <div class="<?php if($page == 1){echo '';} else{ echo 'hide';} ?> small-title text-center company__offices-title"></div></a></li>

         <li class="<?php if($page == 2){echo "active";}else{ echo "";}?>"><a class="tabbuttons" href="<?php echo base_url("about_us.html"); ?>">About Us <div class="<?php if($page == 2){echo '';} else{ echo 'hide';} ?>small-title text-center company__offices-title"></div></a></li>

         <li class="<?php if($page == 3){echo "active";}else{ echo "";}?>"><a class="tabbuttons" href="<?php echo base_url("business.html"); ?>">Businesses <div class="<?php if($page == 3){echo '';} else{ echo 'hide';} ?> small-title text-center company__offices-title"></div></a></li>

         <li class="<?php if($page == 4){echo "active";}else{ echo "";}?>"><a class="tabbuttons hide" href="<?php echo base_url("future.html"); ?>">Future Thought <div class="<?php if($page == 4){echo '';} else{ echo 'hide';} ?> small-title text-center company__offices-title"></div></a></li>

         <li class="<?php if($page == 5){echo "active";}else{ echo "";}?>"><a class="tabbuttons" href="<?php echo base_url("investors.html"); ?>">Investors <div class="<?php if($page == 5){echo '';} else{ echo 'hide';} ?> small-title text-center company__offices-title"></div></a></li>

        <li class="<?php if($page == 6){echo "active";}else{ echo "";}?>">
          <a class="tabbuttons" href="<?php echo base_url("media.html"); ?>">Media
            <div class="<?php if($page == 6){echo '';} else{ echo 'hide';} ?> small-title text-center company__offices-title">
            </div>
          </a>
        </li>

         <li class="<?php if($page == 7){echo "active";}else{ echo "";}?>">
           <a class="tabbuttons" href="<?php echo base_url("contact.html"); ?>">Contact
             <div class="<?php if($page == 7){echo '';} else{ echo 'hide';} ?> small-title text-center company__offices-title">
             </div>
           </a>
         </li>
       </ul>
     <!-- <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a> -->
   </div>
  </nav>
</div>


</head>
