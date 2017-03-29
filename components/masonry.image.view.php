<?php ?>

<!-- Masonry Image View
================================================== -->
<link rel="stylesheet" href="./components/masonry-image-view.css">
<div id="photos" class="container">
  <div class="row">
    <!-- Create the masonry images from masonry_array --><?php print("\n");
    foreach($masonry_array as $masonry_item => $masonry_item_array){
      $image = $masonry_item_array['image'];
      print("    <img src=\"$image\" alt=\"\">\n");
    } ?>
    <!-- End -- Create the masonry images from masonry_array -->
  </div>
</div>
