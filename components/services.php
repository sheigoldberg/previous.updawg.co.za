<?php ?>

<!-- services
================================================== -->
<!-- Custom css available in css/style.css SERVICES CONTENT -->
<link rel="stylesheet" href="./components/services.css">
<div id="services" class="container services">
  <div class="services-title bottom_border">
    <h2>Services</h2>
  </div>
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <!-- Create the carousel-indicators from $header_array -->
<?php foreach($service_array as $service_item => $service_item_array){
  $glyphicon = $service_item_array['glyphicon'];
  $service_title = $service_item_array['service_title'];
  $service_paragraph = $service_item_array['service_paragraph'];
  print("    <div class=\"col-md-4\">\n");
  print("     <span class=\"glyphicon $glyphicon\" aria-hidden=\"true\" style=\"font-size: 50px;\"></span>\n");
  print("     <h2>$service_title</h2>\n");
  print("     <p>$service_paragraph</p>\n");
  print("    </div><!-- /.col-md-4 -->\n");
} ?>
    <!-- End - Create the carousel-indicators from $header_array -->
  </div><!-- /.row -->
</div><!-- /.container -->
