

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="expires" content="0" />
<title>upDawg Web Design</title>
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
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
  var shiftWindow = function() { scrollBy(0, -80) };
  if (location.hash) shiftWindow();
  window.addEventListener("hashchange", shiftWindow);
</script>
<!-- ------------------------------------------------------------------ -->
<!-- other details -->
<link rel="icon" href="images/PugFace.404040.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="images/PugFace.404040.png" />
<meta name="msapplication-TileImage" content="images/PugFace.404040.png" />
<!-- ------------------------------------------------------------------ -->
<!-- Google Analytics Tracking Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83682070-1', 'auto');
  ga('send', 'pageview');
  setTimeout(function(){ga.push(['_trackEvent', 'Control', 'Bounce Rate', ''])},10000)
</script>
<meta content="The simplest way to establish an professional online web presence - Website Designers in Cape Town, Durban, Pretoria, Gauteng and Johannesburg - Web designers in South Africa - Click HERE for prices, website design, website designers and web hosting and top website design company in South Africa" name="description">
<meta content="website design, web designers pretoria, web designers gauteng, website design company, website design company cape town, website design company johannasburg, website design in south africa, website design prices, website design and hosting south africa, website design companies in south africa, website design companies in durban, website design companies johannesburg, website design for business, website design gauteng, website design html, website design in johannesburg, website design in cape town, website design quotes, website design company durban, website design company pretoria, website design cape town, website design johannesburg, website design durban, website design pretoria, website design gauteng, web designers, website designers, website design company, web design company, website hosting, website design hosting, web hosting, website design cape town, website design johannesburg, website design durban, website design pretoria, website design gauteng, web designers cape town, web designers johannesburg, web designers durban, website design company gauteng, website design companies, website designers" name="keywords">

<meta property="og:url" content="http://updawg.co.za" />
<meta property="og:type" content="website" />
<meta property="og:title" content="upDawg Web Design and Hosting" />
<meta property="og:description" content="Professional Bespoke Web Design" />
<meta property="og:image" content="http://updawg.co.za/images/header1.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="600" />

</head>
<body>

<!-- navbar-fixed-top
================================================== -->
<link rel="stylesheet" href="./css/navbar-fixed-top.css">
<nav id="navigation" role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div id="nav-container" class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div id="nav-container-header" class="navbar-header" >
            <button type="button" data-target="#nav-container-collapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="nav-container-brand" class="navbar-brand" href="http://updawg.co.za">
              <img src="images/PugFace.404040.png" alt="">
            </a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="nav-container-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <!-- Create the menu items from $menu_array -->
              <li><a href='http://updawg.co.za#portfolio'>Portfolio</a></li>
              <li><a href='http://updawg.co.za#aboutus'>About Us</a></li>
              <li><a href='http://updawg.co.za#testimonials'>Testimonials</a></li>
              <li><a href='http://updawg.co.za#contactform'>Contact</a></li>
              <!-- End - Create the menu items from $menu_array -->
            </ul>
        </div>
    </div>
</nav>

<!-- Header carousel
================================================== -->
<link rel="stylesheet" href="./css/header-carousel.css">
<div id="header-carousel" class="carousel slide" data-ride="carousel" data-interval="1000">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <!-- Create the carousel-indicators from $header_array -->
    <div class="item active" style="background-image: url(images/header1.jpg);">
      <div class="imageopacitydiv">
        <div class="slidertextcontainer">
          <p class="maintitle">Do you need a beautiful website with minimal time and effort?</p>
          <div class="button">
           <a href="#aboutus"><button type="button" class="btn btn-primary outline">We have a solution for you</button></a>
          </div>
        </div>
      </div>
    </div>
    <!-- End - Create the carousel-indicators from $header_array -->
  </div>

<!-- portfolio
================================================== -->
<link rel="stylesheet" href="./css/portfolio.css">
<div id="portfolio" class="portfolio">
  <div class="portfolio-title bottom_border">
    <h2>Portfolio of work</h2>
  </div>
  <div class="portfolio-subtitle">
    <h3>These are some websites we have designed and built.  Please click on the links below to view the live sites.</h3>
  </div>
  <div class="container">
    <!-- Create the carousel-indicators from $header_array -->
      <div class="row">
        <div class="col-md-4 col-sm-6">
         <div class="thumbnail">
           <a href="http://daystar-construction.co.za">
             <img src="images/portfolio1.jpg" alt="...">
              <div class="caption">
               <h4>Daystar Construction</h4>
               <h5>Clean Crisp Portfolio</h5>
               <p>This site is simple and effective.  The main purpose is to display as many pictures of previous projects as possible and give potential customers a view into what Daystar could build for them.</p>
             </div>
           </a>
         </div>
        </div>
        <div class="col-md-4 col-sm-6">
         <div class="thumbnail">
           <a href="http://prologueconsulting.co.za/">
             <img src="images/portfolio2.jpg" alt="...">
              <div class="caption">
               <h4>Prologue Consulting</h4>
               <h5>Portray Information</h5>
               <p>Prologue consulting is a B2B specialising in recruitment and contracting.  Their site needed to convey alot of information in a clear and easy to consume format to convince HR professionals of Prologue's abilities to solve recruitment issues</p>
             </div>
           </a>
         </div>
        </div>
        <div class="col-md-4 col-sm-6">
         <div class="thumbnail">
           <a href="http://brandyourcareerservices.net/">
             <img src="images/portfolio3.jpg" alt="...">
              <div class="caption">
               <h4>Brand Your Career Services</h4>
               <h5>A Freelancer's Calling Card</h5>
               <p>The Brand Your Career Services site is run by a hard working and motivated free lancer who needed to convey a level of professionalism to support their busy and effective LinkedIn acquisition campaigns</p>
             </div>
           </a>
         </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
         <div class="thumbnail">
           <a href="http://fadelah-scarves.com/">
             <img src="images/portfolio4.jpg" alt="...">
              <div class="caption">
               <h4>Fadelah Scarves</h4>
               <h5>Displaying your beautiful crafts</h5>
               <p>Fadelah Scarves is a locally based South African company that designs scarves, wraps and ponchos with the objective of making people feel beautiful and raising awareness regarding breast cancer</p>
             </div>
           </a>
         </div>
        </div>
        <div class="col-md-4 col-sm-6">
         <div class="thumbnail">
           <a href="http://goalseek.co.za">
             <img src="images/goalseek.co.za.jpg" alt="...">
              <div class="caption">
               <h4>Goal Seek</h4>
               <h5>Information sharing for a small startup</h5>
               <p>Goak Seek is a small startup in the professional services industry.  They needed a professional and elegant website to share their product offering with potential clients.</p>
             </div>
           </a>
         </div>
        </div>
        <div class="col-md-4 col-sm-6">
         <div class="thumbnail">
           <a href="http://bahai.joburg">
             <img src="images/bahai.joburg.jpeg" alt="...">
              <div class="caption">
               <h4>The Bahai's of Joburg</h4>
               <h5>Community Website</h5>
               <p>The Bahai Faith is a world embracing religion that believes in the Oneness of God and the Oneness of Humanity.  The Bahai's of Joburg is one example of thousands of communities across the globe</p>
             </div>
           </a>
         </div>
        </div>
      </div>
    <!-- End - Create the carousel-indicators from $header_array -->
  </div>
</div>

<!-- calltoaction-single
================================================== -->
<link rel="stylesheet" href="./css/calltoaction-single.css">
<div id="calltoaction-single" class="parallax" style="background-image: url(images/cta.jpg)">
  <div class="cover">
      <div class="parallax-title bottom_border">
        <h2>The simplest way to get a professional website for R200 per month</h2>
      </div>
      <div class="parallax-content">
        <h3>upDawg is the easiest way to establish a professional online presence for your new endeavour.</h3>
        <h4>We build your site upfront at no intial cost and charge you R200 per month to keep it up and running.  There is zero risk for you... if the site isn't working for you you can simply cancel on a month to month basis.</h4>
        <h4>We are incentivised to make sure that your website is worth your while... all you need to give us is the basic content of your site.  What you do and what you are about and we will take care of the rest.</h4>
      </div>
      <div class="parallax-calltoaction-content">
        <h4>Contact us to get a free quote and demo version of your website</h4>
        <div class="button">
          <a href="http://updawg.co.za#contactform"><button type="button" class="btn btn-primary outline">Free Quote</button></a>
        </div>
    </div>
  </div>
</div>

<!-- aboutus
================================================== -->
<link rel="stylesheet" href="./css/aboutus.css">
<div id="aboutus" class="container-fluid aboutus">
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-md-6">
      <div class="aboutus-title bottom_border">
        <h2>About Us</h2>
      </div>
      <p>We are a small team of designers and engineers who are passionate about building beautiful websites and leveraging the power of the Internet for the purposes of small businesses. Although the ability to host and manage small websites is ubiquitous these days, companies still need to conceptualise and create web presence campaigns that serve their needs. At upDawg we will do much more than take care of the technical details of your website, we will collaborate with you to breathe a spirit into your online presence. A spirit that represents your business and clearly demonstrates what you have to offer to the world. We will be your one stop shop for all things web.</p>
    </div><!-- /.col-md-6 -->
    <div class="col-md-6">
      <div class="aboutus-title bottom_border">
        <h2>Our Philosophy</h2>
      </div>
      <p>Any small businesses operating in the world today would be losing out on tremendous value if it did not make use of the Internet to promote and craft their brand online. At upDawg we have gathered together some very effective skills for designing, managing and promoting an online brand. We seek to remove the complexity behind creating and managing an effective web presence so that small businesses can focus on doing what they do best. By making your web presence simple, reliable and awesome we allow you to demonstrate your value to current and future customers without taking your eye off the ball.</p>
    </div><!-- /.col-md-6 -->
  </div><!-- /.row -->
  <div class="row">
    <div class="col-md-6">
      <div class="aboutus-title bottom_border">
        <h2>We are all about</h2>
      </div>
      <p>We are all about: website design, web designers, website designers, we are a website design company or a web design company. We also offer website hosting also called website design hosting or web hosting, and our main search phrases are website design cape town, website design johannesburg, website design durban, website design pretoria, and we offer website design gauteng, web designers cape town, web designers johannesburg, web designers durban, web designers pretoria, web designers gauteng, and we are the very best best website design company, in website design company cape town, and website design company johannasburg and website design company durban and website design company pretoria and website design company gauteng and website design companies</p>
    </div><!-- /.row -->
    <div class="col-md-6">
      <div class="aboutus-title bottom_border">
        <h2>Web Design</h2>
      </div>
      <p>Usually, each web page designed within a website is an HTML file (website design) which has its own web design URL. After each web page is created, they are typically linked together using a navigation menu composed of hyperlinks. Faster browsing speeds have led to shorter attention spans and more demanding online visitors and this has resulted in less use of Splash Web Design Pages, particularly where commercial web design sites are concerned. A website design designed by designers typically consists of web text and web images. The first web page of a website is known as the Home page or Index page of your web design. Some web designs use what is commonly called a Splash Web Page. Splash web design pages might include a welcome message, language or region selection, or disclaimer.</p>
    </div><!-- /.row -->
  </div><!-- /.row -->
</div><!-- /.container -->

<!-- calltoaction-single
================================================== -->
<link rel="stylesheet" href="./css/calltoaction-single.css">
<div id="calltoaction-single" class="parallax" style="background-image: url(images/calltoaction1.jpg)">
  <div class="cover">
      <div class="parallax-title bottom_border">
        <h2>Your web presence partner</h2>
      </div>
      <div class="parallax-content">
        <h3>No more worries. upDawg will design, manage and promote the online presence your business needs</h3>
      </div>
      <div class="parallax-calltoaction-content">
        <h4>Contact us to get a free quote and demo version of your website</h4>
        <div class="button">
          <a href="http://updawg.co.za#contactdetails"><button type="button" class="btn btn-primary outline">Free Quote</button></a>
        </div>
    </div>
  </div>
</div>

<!-- testimonial-v1
================================================== -->
<link rel="stylesheet" href="./css/testimonial-v1.css">
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
    <h2>Testimonials</h2>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-offset-1 col-md-10">
              <div id="testimonial-slider" class="owl-carousel">
                <!-- Create the testimonial carousel -->

                  <div class="testimonial">
                      <div class="pic">
                          <a href="http://daystar-construction.co.za" target="_blank"><img src="images/portfolio1.jpg" alt=""></a>
                      </div>
                      <p class="description">Nobody provides the service and design excellence that upDawg does, and its literally the cheapest web design and hosting service on the internet!</p>
                      <h3 class="testimonial-title">
                          Dave Shams<small class="post">CEO: Daystar Construction</small>
                      </h3>
                  </div>

                  <div class="testimonial">
                      <div class="pic">
                          <a href="http://prologueconsulting.co.za/" target="_blank"><img src="images/portfolio2.jpg" alt=""></a>
                      </div>
                      <p class="description">What we appreciate the most is uDawg’s flexibility to explore different problem solving alternatives taking into mind our business needs!</p>
                      <h3 class="testimonial-title">
                          Thuli Mdluli<small class="post">CEO: Prologue Consulting</small>
                      </h3>
                  </div>

                  <div class="testimonial">
                      <div class="pic">
                          <a href="http://brandyourcareerservices.net/" target="_blank"><img src="images/portfolio3.jpg" alt=""></a>
                      </div>
                      <p class="description">We are very happy with our web design and the site has given us no problems since the day we launched.</p>
                      <h3 class="testimonial-title">
                          Sam Isaacs<small class="post">Managing Director: Brand Your Career Services</small>
                      </h3>
                  </div>

                  <div class="testimonial">
                      <div class="pic">
                          <a href="http://fadelah-scarves.com/" target="_blank"><img src="images/portfolio4.jpg" alt=""></a>
                      </div>
                      <p class="description">After my website went live,I had more positive hits in one week than I had in one year with my old website.</p>
                      <h3 class="testimonial-title">
                          Abdia Naidoo<small class="post">Chief Designer: Fadelah Scarves</small>
                      </h3>
                  </div>

                  <div class="testimonial">
                      <div class="pic">
                          <a href="http://mr-t-the-mechanic.co.za" target="_blank"><img src="images/mr-t-the-mechanic.co.za.jpg" alt=""></a>
                      </div>
                      <p class="description">Great service!  My website has helped my business tremedously!</p>
                      <h3 class="testimonial-title">
                          Talent The Mechanic<small class="post">Chief Mechnic: Mr T The Mechanic</small>
                      </h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- contactdetails
================================================== -->
<link rel="stylesheet" href="./css/contactdetails.css">
<div id="contactdetails" class="container-fluid contactdetails">
  <div class="contactdetails-title bottom_border">
    <h2>Get in Touch</h2>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="thumbnail">
          <img src="images/emailicon.png" alt="...">
          <div class="caption">
            <p>EMAIL</p>
            <p>Email <a href='mailto:info@updawg.co.za?Subject=Banner email'>info@updawg.co.za</a></p>
          </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="thumbnail">
          <img src="images/phoneicon.png" alt="...">
          <div class="caption">
            <p>PHONE</p>
            <p>Call Shei at <a href='tel:082-998-7122'>082-998-7122</a></p>
          </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="thumbnail">
          <img src="images/location.png" alt="...">
          <div class="caption">
            <p>LOCATION</p>
            <p><p>Illovo</p>
            <p>Gauteng</p></p>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- contactform
================================================== -->
<link rel="stylesheet" href="./css/contactform.css">
<!-- Action script for the form must be included in this file -->
<div id="contactform" class="contactform" style="background-image: url(images/contactform.jpg); ">
  <div class="cover">
    <div class="contactform-title bottom_border">
      <h2>Online Enquiry Form</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- <div class="col-md-6 col-md-offset-3"> -->
          <!-- <h1 class="page-header text-center">Contact Form Example</h1> -->
          <form id="contactform-form" role="form" method="post" action="/index.php#contactform">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
              <p class='text-danger'></p>            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
              <p class='text-danger'></p>            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="phone" class="form-control" id="phone" name="phone" placeholder="0827768965" value="">
              <p class='text-danger'></p>            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" rows="4" id="message" name="message"></textarea>
              <p class='text-danger'></p>            </div>
            <div class="form-group">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary outline">
            </div>
            <div class="form-group">
            </div>
          </form>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>

<!-- footer
================================================== -->
<link rel="stylesheet" href="./css/footer.css">
<footer id="footer" class="footer">
  <div class="container-fluid">
  	<div class="row">
      <div class="col-sm-6 updawgfooter">
  			<p>Copyright &copy; upDawg Web Design</p>
  		</div>
  		<div class="col-sm-6 updawgfooter">
  			<a href="http://updawg.co.za">
  			     <p>Designed and Hosted by upDawg<img src="images/BlackPugFace.png"></p>
  			</a>
  		</div>
  	</div>
  </div><!-- .site-info -->
  <a href="https://icons8.com/"></a>
</footer>

</body>
</html>
