<?php ?>

<!-- latestnews
================================================== -->
<link rel="stylesheet" href="./components/latestnews.css">
<div id="latestnews" class="container latestnews">
  <div class="latestnews-title bottom_border">
    <h2>Latest News</h2>
  </div>
  <div class="latestnews-subtitle">
    <h3><?php print("$latestnews_intro_paragraph"); ?></h3>
  </div>
  <div class="container">
    <!-- Create the latestnews from $latestnews_array --><?php print("\n");
    foreach($latestnews_array as $latestnews_row){
      print("      <div class=\"row\">\n");
      foreach($latestnews_row as $latestnews_item => $latestnews_item_array){
        $latestnews_href = $latestnews_item_array['latestnews_href'];
        $latestnews_image = $latestnews_item_array['latestnews_image'];
        $latestnews_title = $latestnews_item_array['latestnews_title'];
        $latestnews_subtitle = $latestnews_item_array['latestnews_subtitle'];
        $latestnews_intro = $latestnews_item_array['latestnews_intro'];
        $latestnews_full_story = $latestnews_item_array['latestnews_full_story'];
        print("        <div class=\"col-md-4\">\n");
        print("          <div class=\"latestnews-image\">\n");
        print("              <img src=\"$latestnews_image\">\n");
        print("          </div>\n");
        print("          <h4>$latestnews_title</h4>\n");
        print("          <p>$latestnews_intro</p>\n");
        print("        </div><!-- /.col-md-4 -->\n");
      }
      print("      </div><!-- /.row -->\n");
    } ?>
    <!-- End - Create the latestnews from $latestnews_array -->
  </div><!-- /.container -->
  <!-- <div class="button">
    <a href="http://updawg.co.za/blog/"><button type="button" class="btn btn-primary outline">See all our news</button></a>
  </div> -->
</div><!-- /.container -->
