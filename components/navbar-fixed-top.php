<?php ?>

<!-- navbar-fixed-top
================================================== -->
<link rel="stylesheet" href="./components/navbar-fixed-top.css">
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
            <a id="nav-container-brand" class="navbar-brand" href="<?php print("$home"); ?>">
              <img src="<?php print("$menu_image"); ?>" alt="">
            </a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="nav-container-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <!-- Create the menu items from $menu_array --><?php print("\n");
                foreach($menu_array as $menu_item){
                $href = $menu_item['href'];
                $text = $menu_item['text'];
                print("              <li><a href='$href'>$text</a></li>\n");
              } ?>
              <!-- End - Create the menu items from $menu_array -->
            </ul>
        </div>
    </div>
</nav>
