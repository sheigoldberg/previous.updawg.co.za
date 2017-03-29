<?php ?>

<!-- services
================================================== -->
<!-- Custom css available in css/style.css SERVICES CONTENT -->
<link rel="stylesheet" href="./components/services.css">
<div id="services" class="container services">
  <div class="services-title bottom_border">
    <h2>Services</h2>
  </div>
  <div class="services-subtitle">
    <h3><?php print("$services_intro_paragraph"); ?></h3>
  </div>
  <div class="container">
    <!-- Create the services from $services_array --><?php print("\n");
    foreach($service_array as $service_row){
      print("    <div class=\"row\">\n");
      foreach($service_row as $service_item => $service_item_array){
        $glyphicon = $service_item_array['glyphicon'];
        $service_title = $service_item_array['service_title'];
        $service_paragraph = $service_item_array['service_paragraph'];
        print("    <div class=\"col-md-4\">\n");
        print("     <span class=\"glyphicon $glyphicon\" aria-hidden=\"true\" style=\"font-size: 50px;\"></span>\n");
        print("     <h2>$service_title</h2>\n");
        print("     <p>$service_paragraph</p>\n");
        print("    </div><!-- /.col-md-4 -->\n");
      }
      print("    </div><!-- /.row -->\n");
    } ?>
    <!-- End - Create the services from $services_array -->
  </div><!-- /.container -->
</div><!-- /#services -->
