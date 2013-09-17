<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Akbarbin :: Ruby on Rails Developer</title>
    <!-- Main Style Sheet -->
    <link href="webroot/css/style.css" rel="stylesheet" type="text/css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="webroot/images/icons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="webroot/images/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="webroot/images/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="webroot/images/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="webroot/images/icons/apple-touch-icon-114x114.png" />

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="ef-loader-overlay"></div>
    <!-- JQuery Plugin -->
    <script type="text/javascript" src="webroot/js/jquery.min.js"></script>
    <script type='text/javascript' src='webroot/js/jquery.easing.1.3.js'></script>
    <script type="text/javascript" src="webroot/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="webroot/js/jquery.visualNav.min.js"></script>   
    <script type="text/javascript" src="webroot/js/jquery.tipsy.js"></script>
    <script type="text/javascript" src="webroot/js/responsiveslides.min.js"></script>    
    <script type="text/javascript" src="webroot/js/jquery.scrollTo-min.js"></script>    
    <script type="text/javascript" src="webroot/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="webroot/js/mosaic-min.js"></script>
    <script type="text/javascript" src="webroot/js/jquery.tweet.js"></script>
    <script type="text/javascript" src="webroot/js/modernizr.js"></script>
    <script type="text/javascript" src="webroot/js/isotope.js"></script>
    <script type="text/javascript" src="webroot/js/jquery.validate.js"></script>

    <!-- JQuery Custom Plugin -->
    <script src="webroot/js/custom.js"></script>
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
  </body>
</html>
