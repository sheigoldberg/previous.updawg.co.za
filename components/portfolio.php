<?php ?>

<!-- portfolio
================================================== -->
<link rel="stylesheet" href="./components/portfolio.css">
<div id="portfolio" class="portfolio">
  <div class="portfolio-title bottom_border">
    <h2><?php print("$portfolio_title"); ?></h2>
  </div>
  <div class="portfolio-subtitle">
    <h3><?php print("$portfolio_subtitle"); ?></h3>
  </div>
  <div class="container">
    <!-- Create the carousel-indicators from $header_array --><?php print("\n");
    print("      <div class=\"row\">\n");
    foreach($portfolio_array as $portfolio_item => $portfolio_item_array){
      $portfolio_href = $portfolio_item_array['portfolio_href'];
      $portfolio_image = $portfolio_item_array['portfolio_image'];
      $portfolio_title = $portfolio_item_array['portfolio_title'];
      $portfolio_subtitle = $portfolio_item_array['portfolio_subtitle'];
      $portfolio_paragraph = $portfolio_item_array['portfolio_paragraph'];
      // print("<pre>".print_r($portfolio_item_array,1)."</pre>");
      print("        <div class=\"col-md-4 col-sm-6\">\n");
      print("         <div class=\"thumbnail\">\n");
      print("           <a href=\"$portfolio_href\">\n");
      print("             <img src=\"$portfolio_image\" alt=\"...\">\n");
      print("              <div class=\"caption\">\n");
      print("               <h4>$portfolio_title</h4>\n");
      print("               <h5>$portfolio_subtitle</h5>\n");
      print("               <p>$portfolio_paragraph</p>\n");
      print("             </div>\n");
      print("           </a>\n");
      print("         </div>\n");
      print("        </div>\n");
    }
    print("      </div>\n");\?>
    <!-- End - Create the carousel-indicators from $header_array -->
  </div>
</div>
