<?php ?>

<!-- testimonial-v1
================================================== -->
<link rel="stylesheet" href="./components/testimonial-v1.css">
<!-- other scripts that are necessary to make this testimonial work
================================================== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:false,
        navigationText:["",""],
        slideSpeed:1000,
        singleItem:true,
        autoPlay:true
    });
});
</script>
<!-- testimonial code
================================================== -->
<div id="testimonials">
  <div class="testimonials-title bottom_border">
    <h2><?php print("$testimonials_title"); ?></h2>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-offset-1 col-md-10">
              <div id="testimonial-slider" class="owl-carousel">
                <!-- Create the testimonial carousel -->
                  <?php foreach($testimonials_array as $testimonials_item => $testimonials_item_array){
                    $image = $testimonials_item_array["image"];
                    $description = $testimonials_item_array["description"];
                    $name = $testimonials_item_array["name"];
                    $job = $testimonials_item_array["job"];
                    $href = $testimonials_item_array["href"];
                  ?>

                  <div class="testimonial">
                      <div class="pic">
                          <a href="<?php print("$href"); ?>" target="_blank"><img src="<?php print("$image"); ?>" alt=""></a>
                      </div>
                      <p class="description"><?php print("$description"); ?></p>
                      <h3 class="testimonial-title">
                          <?php print("$name"); ?><small class="post"><?php print("$job"); ?></small>
                      </h3>
                  </div>
                  <?php } ?>

              </div>
          </div>
      </div>
  </div>
</div>
