<?php ?>

<!-- Header carousel
================================================== -->
<link rel="stylesheet" href="./components/header-carousel.css">
<div id="header-carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <!-- Create the carousel-indicators from $header_array --><?php print("\n");
    foreach($header_array as $header_item => $header_item_array){
      if ($header_item == 0) print("    <li data-target=\"#header-carousel\" data-slide-to=\"$header_item\" class=\"active\"></li>\n");
      else print("    <li data-target=\"#header-carousel\" data-slide-to=\"$header_item\" class=\"active\"></li>\n");
    } ?>
    <!-- End - Create the carousel-indicators from $header_array -->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <!-- Create the carousel-indicators from $header_array --><?php print("\n");
    foreach($header_array as $header_item => $header_item_array){
      $image = $header_item_array['image'];
      $title = $header_item_array['title'];
      $subtitle = $header_item_array['subtitle'];
      $button = $header_item_array['button'];
      $button_href = $header_item_array['button_href'];
      // print("<pre>".print_r($header_item_array,1)."</pre>\n");
      if ($header_item == 0) print("	<div class=\"item active\" style=\"background-image: url($image);\">\n");
      else print("	<div class=\"item\" style=\"background-image: url($image);\">\n");
      print("      <div class=\"imageopacitydiv\">\n");
      print("        <div class=\"slidertextcontainer\">\n");
      print("          <p class=\"maintitle\">$title</p>\n");
      print("          <p class=\"subtitle\">$subtitle</p>\n");
      print("          <div class=\"button\">\n");
      print("           <a href=\"#$button_href\"><button type=\"button\" class=\"btn btn-primary outline\">$button</button></a>\n");
      print("          </div>\n");
      print("        </div>\n");
      print("      </div>\n");
      print("    </div>\n");
    } ?>
    <!-- End - Create the carousel-indicators from $header_array -->
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#header-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#header-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
