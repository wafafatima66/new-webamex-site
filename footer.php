<?php include 'link.php'; ?>

<!--Footer area-->

<div class="footer-area pt-4">
  <div class="container">

    <div class="row">

      <div class="col-md-3 col-sm-12 text-sm-center text-md-left "><img src="image/logo.png" style="height: 50px;" alt="">
        <p class="footer-para ">Web amex is a proffesional team in this industry to insure all kind of it support.</p>
      </div>

      <div class="col-md-3 col-sm-12 mx-sm-auto">

        <div class="row text-sm-center text-md-left "><span class="footer-heading col-sm-12"><a style="color:white;">Address</a>
            <p class="footer-para" >Sector: 11, road: 10/B
              House 07
              Uttara
              Dhaka
              Bangladesh</p>
          </span>
        </div><br>

        <!-- <div class="row text-sm-center text-md-left "><span class="footer-heading col-sm-12">Products</span> <br><p class="footer-para col-sm-12 ">Social media marketing solution<br>E-commerce solution<br>Website managment solution</p>
              </div>
              <br>
              <div class="row text-sm-center text-md-left  "><span class="footer-heading col-sm-12 ">Services<br></span> <br><p class="footer-para  col-sm-12">Web design and development <br> Software Development<br> E-commerce Solution<br> Social Media Marketing</p>
              </div> -->

      </div>
      <div class="col-md-5 col-sm-12 mx-sm-auto">
        <div class="row">
          <div class="subscribe-box">
            <h5>Subscribe to our Newsletter</h5>
            <input style="height: 30px;  font-size: 15px;" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email">
            <button style="height:30px;   font-size: 15px;" type="submit" class=" subscribe-button btn  mt-2 p-1">Subscribe</button>
          </div>
        </div>
        <div class="row " style="color: white;">

          <div class="col-md-12 col-sm-12 text-center">
            <a href="https://www.facebook.com/Web-Amex-115938159838216/" target="_blank"> <i class="fab fa-facebook-f footer-icon "></i></a>
            <a href=""> <i class="fab fa-twitter footer-icon"> </i></a>
            <a href=""><i class="fab fa-instagram footer-icon"> </i></a>
            <a href=""> <i class="fab fa-linkedin footer-icon"> </i></a>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>

<div class="boundary"></div>
<div class="footer">
  <p class="text-center pt-2">webamex All rights reserved.</p>
</div>
<!--end of footer area-->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<!-- Slick js  -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<!-- Carousel  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>


<script>
  $(document).ready(function() {

    $('.testimonial-items').slick({
      dots: true,
      infinite: true,
      speed: 800,
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

      ]
    });
  });
</script>



</body>

</html>