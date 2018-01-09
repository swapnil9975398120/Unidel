<section class="footer-section">
   <div class="footer-inner-wrapper">
  <div class="container">
<!--   
    <ul class="list-inline footer-navigation">
      <li><a href="#">About Us</a></li>
      <li><a href="#">Team</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">News room</a></li>
      <li><a href="#">Site Map</a></li>
      <li><a href="#">Careers</a></li>
    </ul> -->
   </div>
  
  <div class="container">
  <div class="row">
      
    <ul class="list-inline footer-navigation">
      <li><a href="#">About Us</a></li>
      <li><a href="#">Team</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">News room</a></li>
      <li><a href="#">Site Map</a></li>
      <li><a href="#">Careers</a></li>
    </ul>
    <div class="col-sm-4  col-sm-offset-0 venture-div">
      <h4>UNIDEL Ventures</h4>
      <p>UNIDEL is an entrepreneurial group with a focus on technology venturing and multi asset class investing.</p>
    </div>
    <div class="col-sm-4 venture-div">
      <h4>Address</h4>
      <p>UNIDEL Ventures Pvt. Ltd.<br>
      86, Jolly Maker Chamber II,<br>
      225, Nariman Point,<br>
       Mumbai 400 021,<br>
        India</p>
    </div>
    <div class="col-sm-4 venture-div">
      <h4><a href="tel:02222873545">+91 (22) 2287 3545</a></h4>
      <h5><a href="tel:02222043855">+91 (22) 2204 3855</a></h5>
      <h6>Fax</h6>
      <h5><a href="tel:02222884424">+91 (22) 2288 4424</a></h5>
      <ul class="list-inline social-icon-row">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                
            </ul>
        <a href="mailto:info@unidel-group.com"><span>info@unidel-group.com</span></a>
    </div>
  </div>
</div>
</div>
<div class="copyright-strip">
  <div class="container">
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <span>Copyright 2017. All Rights Reserved.</span>
    </div>
    <div class="col-sm-8 col-xs-12">
      <ul class="list-inline footer-navigation">
      <li><a href="#">Terms of use </a></li>
      <li><a href="#">Trademarks</a></li>
      <li><a href="#">Privacy </a></li>
      <li><a href="#">Cookies </a></li>
      <li><a href="#">UNIDEL code of conduct</a></li>
         </ul>
    </div>
  </div>
</div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="{{ asset('themes/frontend') }}/js/bootstrap.js"></script>
  <script src="{{ asset('themes/frontend') }}/js/slick.js"></script>
   
<!--    <script type="text/javascript">
  
   jQuery(document).on('ready', function() {

         jQuery(".stories-slider").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        arrows : true
       
      });
          });
  
   </script> -->

   <script type="text/javascript">
     $(document).ready(function(){
        $('.stories-slider').slick({
          dots: true,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          responsive:[
            {
              breakpoint:1030,
              settings:{
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
            {
              breakpoint:992,
              settings:{
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false
            }
          },
          {
              breakpoint:800,
              settings:{
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },

            {
              breakpoint:480,
              settings:{
              slidesToShow: 1,
              arrows : false,
              slidesToScroll: 1
            }
            }

          ]
        });
});
  
   </script>

    <script type="text/javascript">
  jQuery(document).on('ready', function() {

      $window = jQuery( window ).width();

      if($window<=767){

        jQuery(".logo-slider").slick({

        dots: false,

        infinite: true,

        slidesToShow: 1,

        slidesToScroll: 1,

        autoplay: true

      });

      }else if($window<=991){

         jQuery(".logo-slider").slick({

        dots: false,

        infinite: true,

        slidesToShow: 2,

        slidesToScroll: 2,

        autoplay: true

      });

      }else{

        jQuery(".logo-slider").slick({

        dots: false,

        infinite: false,

        slidesToShow:4,

        slidesToScroll: 4,

        autoplay: false

      });

      }

      

    });



   </script>
   <script type="text/javascript">
     $(document).ready(function(){
        $('.team-slider').slick({
          dots: false,
          infinite: true,
          slidesToShow: 2,
          slidesToScroll: 2,
          autoplay: false,
          responsive:[
            {
              breakpoint:1030,
              settings:{
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
            {
              breakpoint:992,
              settings:{
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false
            }
          },
          {
              breakpoint:800,
              settings:{
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },

            {
              breakpoint:480,
              settings:{
              slidesToShow: 1,
              slidesToScroll: 1
            }
            }

          ]
        });
});
  
   </script>
   <script type="text/javascript">
     $(document).ready(function(){
        $('.news-slider').slick({
          dots: false,
          infinite: true,
          slidesToShow: 2,
          slidesToScroll: 2,
          autoplay: false,
          responsive:[
            {
              breakpoint:1030,
              settings:{
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
            {
              breakpoint:992,
              settings:{
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false
            }
          },
          {
              breakpoint:800,
              settings:{
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },

            {
              breakpoint:480,
              settings:{
              slidesToShow: 1,
              slidesToScroll: 1
            }
            }

          ]
        });
});
  
   </script>
   
  <!--  <script type="text/javascript">
      jQuery(document).on('ready', function() {
      $window = jQuery( window ).width();
      if($window<=767){
        jQuery(".team-slider").slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false
      });

      }else if($window<=991){
         jQuery(".team-slider").slick({
        dots: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true
      });

      }else if($window<=480){
         jQuery(".team-slider").slick({
        dots: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: false
      });
      }
      else{
        jQuery(".team-slider").slick({
        dots: false,
        infinite: false,
        slidesToShow:2,
        slidesToScroll: 2,
        autoplay: false
      });
      }
    });
   </script> -->

   <script type="text/javascript">
     $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
   </script>
   @yield('page_script')
   </body>
</html>
