<?php ?>

<!-- text
================================================== -->
<link rel="stylesheet" href="./components/text.css">
<div id="text" class="container text">
  <!-- Three columns of text below the carousel -->
  <?php if(isset($text_title)){ ?>
    <div class="row">
      <div class="col-md-12">
        <div class="text-title bottom_border">
          <h2><?php print("$text_title"); ?></h2>
        </div>
      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
  <?php } ?>
  <!-- Create the text from $text_array --> <?php print("\n");
  foreach($text_array as $rownum => $rownum_item_array){
    $text_title = $rownum_item_array['title'];
    if(isset($text_title)){
      print("  <div class=\"row\">\n");
      print("    <div class=\"col-md-12\">\n");
      print("      <h2>$text_title</h2>\n");
      print("    </div>\n");
      print("  </div>\n");
    }
    $text_array = $rownum_item_array['text'];
    if(isset($text_array)){
      print("  <div class=\"row\">\n");
      print("    <div class=\"col-md-12\">\n");
      foreach($text_array as $text_item => $text_item_array){
        $text = $text_item_array;
        print("      <p>$text</p>\n");
      }
      print("    </div>\n");
      print("  </div>\n");
    }
    $masonry_array = $rownum_item_array['image'];
    if(isset($masonry_array)){
      print("  <div class=\"row\">\n");
      foreach($masonry_array as $masonry_item => $masonry_item_array){
        $image = $masonry_item_array;
        print("    <img src=\"$image\" alt=\"\">\n");
      }
      print("  </div>\n");
    }
  } ?>
</div><!-- /.container -->
