<?php ?>

<!-- Header carousel
================================================== -->
<link rel="stylesheet" href="./components/header-image.css">

</script>
<div id="header-image" class="header-image" style="background-image: url(<?php print("$header_image"); ?>)">
  <div class="imageopacitydiv">
    <div class="slidertextcontainer">
      <p class="maintitle"><?php print("$header_title"); ?></p>
      <p class="subtitle"><?php print("$header_subtitle"); ?></p>
      <div class="button">
       <a href="#<?php print("$header_button_href"); ?>"><button type="button" class="btn btn-primary outline"><?php print("$header_button"); ?></button></a>
      </div>
    </div>
  </div>
</div>
