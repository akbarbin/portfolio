<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Akbarbin :: Ruby on Rails Developer</title>
    <!-- Main Style Sheet -->
    <link href="<?php echo base_url()?>application/assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url()?>application/assets/images/icons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>application/assets/images/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>application/assets/images/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>application/assets/images/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>application/assets/images/icons/apple-touch-icon-114x114.png" />

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>
  <body>
    <div id="ef-loader-overlay"></div>

    <!-- JQuery Plugin -->
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo base_url()?>application/assets/js/jquery.easing.1.3.js'></script>
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/jquery.visualNav.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/jquery.tipsy.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/responsiveslides.min.js"></script>    
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/jquery.scrollTo-min.js"></script>    
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/mosaic-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/jquery.tweet.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/isotope.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>application/assets/js/jquery.validate.js"></script>

    <!-- JQuery Custom Plugin -->
    <script src="<?php echo base_url()?>application/assets/js/custom.js"></script>
    <script type="text/javascript">
      $(window).bind("load", function() {
        $(document).ready(function () {
          $('#ef-loader-overlay').fadeOut(800);			
				
				
          $.fn.equalHeights = function(minHeight, maxHeight) {
            tallest = (minHeight) ? minHeight : 0;
            this.each(function() {
              if($(this).height() > tallest) {
                tallest = $(this).height();
              }
            });
            if((maxHeight) && tallest > maxHeight) tallest = maxHeight;
            return this.each(function() {
              $(this).css({'height': tallest});
            });
          }
		
          // Set Icon Box Max Height //
          //---------------------------------------------------------------- //
          var ib_container = $('.gallery-outer');
          ib_container.equalHeights();
		
          $(window).resize(function(){
            ib_container.css('height','auto');
            ib_container.equalHeights();
          });
				
          var $container = $('#content');
          $container.isotope({
            filter: '*',
            animationOptions: {
              duration: 750,
              easing: 'linear',
              queue: false
            }
          });
          $('#portolfio-filter a').click(function () {
            $('#portolfio-filter a').removeClass('active');
            $(this).addClass('active');
            return false;
          });
          $('#portolfio-filter a').click(function () {
            var selector = $(this).attr('data-filter');
            $container.isotope({
              filter: selector,
              animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
              }
            });
            return false;
          });
        });
        // code here
      });
      $(window).load(function() {
			
			
      });
		
    </script>
    <header>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div id="logo">
              <a href="#home" class="scrolltoanchor"><img src="<?php echo base_url()?>application/assets/images/logo.png" alt=""></a>
            </div>
          </div>
          <div class="span9 pos-relative">
            <nav id="sidemenu">
              <ul id="nav">
                <li><a href="#home" class="menu">Home</a></li>
                <li><a href="#about" class="menu">About Me</a></li>
                <li><a href="#works" class="menu">Portfolio</a></li>
                <li><a href="http://akbarbin.blogspot.com" target="_blank">Blog</a></li>
                <li><a href="#contact" class="menu">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>