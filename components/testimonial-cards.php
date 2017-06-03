<?php ?>

<!-- testimonial-v1
================================================== -->
<link rel="stylesheet" href="./components/testimonial-cards.css">
<!-- testimonial code
================================================== -->
<div id="testimonials">
  <div class="testimonials-title bottom_border">
    <h2><?php print("$testimonials_title"); ?></h2>
  </div>

  <div class="container-fluid">
    <div class="card-columns">
    <!-- Create the testimonial card -->
      <?php foreach($testimonials_array as $testimonials_item => $testimonials_item_array){
        $image = $testimonials_item_array["image"];
        $description = $testimonials_item_array["description"];
        $name = $testimonials_item_array["name"];
        $job = $testimonials_item_array["job"];
      ?>

      <div class="card">
        <img class="card-img-top img-fluid" src="<?php print("$image"); ?>">
        <div class="card-block">
          <h4 class="card-title"><?php print("$name"); ?></h4>
          <p class="card-text"><?php print("$description"); ?></p>
          <footer>
          <small class="text-muted">
            <?php print("$job"); ?>
          </small>
        </footer>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
