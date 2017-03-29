<?php ?>

<!-- calltoaction-single
================================================== -->
<link rel="stylesheet" href="./components/calltoaction-single.css">
<div id="calltoaction-single" class="parallax" style="background-image: url(images/calltoaction1.jpg)">
  <div class="cover">
      <div class="parallax-title bottom_border">
        <h2><?php print("$calltoaction_single_title"); ?></h2>
      </div>
      <div class="parallax-content">
        <h3><?php print("$calltoaction_single_subtitle"); ?></h3>
      </div>
      <div class="parallax-calltoaction-content">
        <h4><?php print("$calltoaction_single_direct_request"); ?></h4>
        <div class="button">
          <a href="<?php print("$calltoaction_single_button_href"); ?>"><button type="button" class="btn btn-primary outline"><?php print("$calltoaction_single_button_text"); ?></button></a>
        </div>
    </div>
  </div>
</div>
