<?php ?>

<!-- Header carousel
================================================== -->
<link rel="stylesheet" href="./components/header-image.css">

</script>
<div id="header-image" class="header-image" style="background-image: url(<?php print("$header_image"); ?>)">
  <div class="imageopacitydiv">
    <div class="slidertextcontainer">
      <p class="maintitle"><?php print("$header_title"); ?></p>
      <div class="row">
        <div class="col-sm-6">
          <p class="subtitle"><?php print("$header_subtitle1"); ?></p>
          <div class="button">
           <a href="<?php print("$header_button_href1"); ?>"><button type="button" class="btn btn-primary outline"><?php print("$header_button1"); ?></button></a>
          </div>
        </div>
        <div class="col-sm-6">
          <p class="subtitle"><?php print("$header_subtitle2"); ?></p>
          <div class="button">
           <a href="<?php print("$header_button_href2"); ?>"><button type="button" class="btn btn-primary outline"><?php print("$header_button2"); ?></button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
