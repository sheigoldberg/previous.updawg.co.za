<?php ?>

<!-- contactform
================================================== -->
<link rel="stylesheet" href="./components/contactform.css">
<!-- Action script for the form must be included in this file -->
<?php include_once("./components/php/action-contact-form.php"); ?>
<div id="contactform" class="contactform" style="background-image: url(images/contactform.jpg); ">
  <div class="cover">
    <div class="contactform-title bottom_border">
      <h2><?php print("$contactform_title"); ?></h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- <div class="col-md-6 col-md-offset-3"> -->
          <!-- <h1 class="page-header text-center">Contact Form Example</h1> -->
          <form id="contactform-form" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>#contactform">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="phone" class="form-control" id="phone" name="phone" placeholder="0827768965" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
              <?php echo "<p class='text-danger'>$errPhone</p>";?>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" rows="4" id="message" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
            <div class="form-group">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary outline">
            </div>
            <div class="form-group">
              <?php echo $result; ?>
            </div>
          </form>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>
