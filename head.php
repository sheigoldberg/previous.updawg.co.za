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
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
<!-- custom css -->
<link rel="stylesheet" href="css/style.css?v=<?=time();?>">
<style type="text/css">
/*Working area for custom css styling*/

</style>
<!-- ------------------------------------------------------------------ -->
<!-- js references -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
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
</head>
<body>
