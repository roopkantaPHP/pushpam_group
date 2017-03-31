
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l4 m4 s12">
          <a id="logo-container" href="#" class="brand-logo"><object id="front-page-logo" class="responsive-img" data="assets/images/test/logo.png" style="width:27%; margin-left:1%"></object></a>
          <ul>
            <li><strong>Corporate Office:</strong></li>
            <!-- <li class="pushpam_text_green">hrd@pushpamgroup.in</li> -->
            <!-- <li class="pushpam_text_green">+91 80 4090 2405</li> -->
            <li>#29 (old no.416)</li>
            <li>18th Main, 4T Block, Jayanagar</li>
              <li>Bangalore 560041</li>
              <li class="pushpam_text_green">+91 80 4090 2405</li>
              <strong>Enquiry:</strong><li class="pushpam_text_green">info@pushpamgroup.in</li>
              <?php if($page == 7) {?>
              <strong>Careers:</strong><li class="pushpam_text_green">hrd@pushpamgroup.in</li>
              <?php }?>
          </ul>
        </div>
        <div class="col l4 m4 s12">
          <h5> <b> Menu </b></h5>
          <ul>
            <li><label><a href="<?php echo base_url(); ?>" class="pushpam_text_green">Home</a></label></li>
            <li><label><a href="<?php echo base_url("about_us.html"); ?>" class="pushpam_text_green">About Us</a></label></li>
            <li><label><a href="<?php echo base_url("business.html"); ?>" class="pushpam_text_green">Business</a></label></li>
            <li><label><a href="<?php echo base_url("future.html"); ?>" class="pushpam_text_green">Future Thought</a></label></li>
            <li><label><a href="<?php echo base_url("investors.html"); ?>" class="pushpam_text_green">Investors </a></label></li>
            <li><label><a href="<?php echo base_url("media.html"); ?>" class="pushpam_text_green">Media </a></label></li>
            <li><label><a href="<?php echo base_url("contact.html"); ?>" class="pushpam_text_green">Contact </a></label></li>
          </ul>
        </div>
        <div class="col l4 m4 s12">
          <h5> <b> Locations </b></h5>
          <ul>
            <li><label>India</label></li>
            <li><label>USA</label></li>
            <li><label>London</label></li>
            <li><label>UAE</label></li>
            <li><label>South Africa</label></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script>
  $(document).ready(function(){
      $('.parallax').parallax();
      $('ul.tabs').tabs('select_tab', 'tab_id');

      
  });

  </script>
</body>
</html>
