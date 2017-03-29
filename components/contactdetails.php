<?php ?>

<!-- contactdetails
================================================== -->
<link rel="stylesheet" href="./components/contactdetails.css">
<div id="contactdetails" class="container contactdetails">
  <div class="contactdetails-title bottom_border">
    <h2><?php print("$contactdetails_title"); ?></h2>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="thumbnail">
          <img src="images/emailicon.png" alt="...">
          <div class="caption">
            <p>EMAIL</p>
            <p><?php print("$contactdetails_email"); ?></p>
          </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="thumbnail">
          <img src="images/phoneicon.png" alt="...">
          <div class="caption">
            <p>PHONE</p>
            <p><?php print("$contactdetails_phone"); ?></p>
          </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="thumbnail">
          <img src="images/phoneicon.png" alt="...">
          <div class="caption">
            <p>LOCATION</p>
            <p><?php print("$contactdetails_location"); ?></p>
          </div>
      </div>
    </div>
  </div>
</div>
