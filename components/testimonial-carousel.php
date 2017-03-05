<?php ?>

<!-- testimonial-carousel
================================================== -->
<link rel="stylesheet" href="./components/testimonial-carousel.css">
<div id="testimonials" style="background-image: url(<?php print("$testimonials_image"); ?>); ">
  <div class="cover">
    <div class="testimonials-title bottom_border">
      <h2><?php print("$testimonials_title"); ?></h2>
    </div>

    <div id="testimonial-carousel" class="carousel slide testimonials" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <!-- Create the carousel-indicators from $testimonials_array --> <?php print("\n");
        foreach($testimonials_array as $testimonials_item => $testimonials_item_array){
          if ($testimonials_item == 0) print("       <li data-target=\"#header-carousel\" data-slide-to=\"$testimonials_item\" class=\"active\"></li>\n");
          else print("       <li data-target=\"#header-carousel\" data-slide-to=\"$testimonials_item\" class=\"active\"></li>\n");
        } ?>
        <!-- End - Create the carousel-indicators from $testimonials_array -->
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <!-- Create the carousel-indicators from $testimonials_array --> <?php print("\n");
        foreach($testimonials_array as $testimonials_item => $testimonials_item_array){
          $title = $testimonials_item_array['title'];
          $subtitle = $testimonials_item_array['subtitle'];
          $paragraph = $testimonials_item_array['paragraph'];
          $website_href = $testimonials_item_array['website_href'];
          $website_text = $testimonials_item_array['website_text'];
          // print("<pre>".print_r($testimonials_item_array,1)."</pre>\n");
          if ($testimonials_item == 0) print("	 <div class=\"item active\">\n");
          else print("	 <div class=\"item\">\n");
          print("        <div class=\"carousel-caption col-md-12\">\n");
          print("          <h2>$title</h2>\n");
          print("          <h4>$subtitle</h4>\n");
          print("          <p>$paragraph</p>\n");
          print("          <p><a href=\"$website_href\">$website_text</p></a>\n");
          print("        </div>\n");
          print("     </div>\n");
        } ?>
        <!-- End - Create the carousel-indicators from $testimonials_array -->
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
