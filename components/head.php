<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="expires" content="0" />
<title><?php  print("$page_title"); ?></title>
<!-- ------------------------------------------------------------------ -->
<!-- css references -->
<!-- bootstrap css -->
<!-- No longer need bootstrap 3 -->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
<!-- bootstrap v4 stylesheet -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->
<!-- fontawesome -->
<script src="https://use.fontawesome.com/ae7e7a938c.js"></script>
<!-- custom css -->
<link rel="stylesheet" href="components/style.css">
<link href="https://fonts.googleapis.com/css?family=<?php  print("$page_font"); ?>" rel="stylesheet">
<style type="text/css">
/*Working area for custom css styling*/

</style>
<!-- ------------------------------------------------------------------ -->
<!-- js references -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!-- Make menu collapse after a button is clicked -->
<script>
$(document).ready(function () {
  $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });
});
</script>
<!-- Fix the problem of anchors loading to the wrong place -->
<script>
  var shiftWindow = function() { scrollBy(0, -<?php  print("$total_height_top"); ?>) };
  if (location.hash) shiftWindow();
  window.addEventListener("hashchange", shiftWindow);
</script>
<!-- ------------------------------------------------------------------ -->
<!-- other details -->
<link rel="icon" href="<?php  print("$page_icon"); ?>" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="<?php  print("$page_icon"); ?>" />
<meta name="msapplication-TileImage" content="<?php  print("$page_icon"); ?>" />
<!-- ------------------------------------------------------------------ -->
<!-- Google Analytics Tracking Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php  print("$page_google_analytics_UA"); ?>', 'auto');
  ga('send', 'pageview');

</script>
<?php  include_once './components/meta-tags.php'; ?>
</head>
<body>
