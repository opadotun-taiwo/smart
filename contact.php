<?php include('contactservice.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wiwa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script src="https://use.fontawesome.com/20ab91acc4.js"></script>
	<link href="style.css" rel="stylesheet">

<script>
  window.console = window.console || function(t) {};
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<div class="container-fluid bg-warning">
<div class="row">
	<div id="mainbox" onclick="openFunction()">&#9776;</div>
	<div id="menu" class="sidemenu">
	<a href="index.html"><i class="fa fa-home"></i>Home</a>
	<a href="product.html"><i class="fa fa-shopping-cart"></i>Connect to buyers</a>
	<a href="register.php"><i class="fa fa-home"></i>Sell</a>
	<a href="contact.php" class="active"><i class="fa fa-home"></i>Contact</a>
	<a href="#" class="closebtn" onclick="closeFunction()">&times;</a>
	</div>
  <div class="col"><h2><a href="index.html" style="color: black;">Wiwa</a></h2>
  </div>
  <div class="col">
	<div class="topnav">
  <a href="index.html">Home</a>
  <a href="product.html">Buy</a>
  <a href="register.php">Sell</a>
    <a href="contact.php" class="active">Contact</a>
  <input type="text" class="look" placeholder="Search.."><span><button class="search">Search</button></span>
</div>
  </div>
</div>
</div>



<section id="contact">
  
  <h1 class="section-header">CONTACT</h1>
  
  <div class="contact-wrapper">
    
      <!---------------- 

      CONTACT PAGE LEFT 
    
      -----------------> 
    
    <form class="form-horizontal" role="form" method="post" action="contact.php">
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="<?php echo $name; ?>">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="<?php echo $email; ?>">
        </div>
      </div>

      <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" value="<?php echo $message; ?>"></textarea>
      
      <button class="btn btn-success send-button" id="submit" type="submit" value="SEND" name="user_contact">SEND
      </button>
      
    </form>
    
      <!---------------- 

      CONTACT PAGE RIGHT 
    
      -----------------> 
    
      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Uyo | AKWA IBOM</span></i></li>
          
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:07033515260" title="Give me a call">07033515260</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">info@wiwa.com.ng</a></span></i></li>
          
        </ul>

        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-github" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-codepen" aria-hidden="true"></i></a>
          </li>
        </ul>
        <hr>

      </div>
    
  </div>
  
</section>  
  
 <!-- About us --> 

 <section class="text-center about">

      <h1>About US</h1>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200" >
            <span class="fa fa-group"></span>
            <h2>Target audience</h2>
            <p class="lead">Corp members in and around AKwa ibom state</p>
          </div>
          <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
            <span class="fa fa-info"></span>
            <h2>Who we are </h2>
            <p class="lead">We are a leading online plartform that bridge the gap between the seller and buyer. We help buyers and sellers connect. Wiwa.com.ng </p>
          </div>
          <div class="clearfix visible-md-block visible-sm-block"></div>
          <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
            <span class="fa fa-file"></span>
            <h2>Enjoy!</h2>
            <p class="lead">Feel free to sell and buy on this plartform. But remember we are not responsible for the quality of products you get. Therefore confirm very well while connecting</p>
          </div>
          
        </div>
        
      </div>
    </section>


<!-- Footer -->
        <footer class="page-footer font-small unique-color-dark">

          <div class="bg-warning">
            <div class="container-fluid">

              <!-- Grid row-->
              <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                  <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                  <!-- Facebook -->
                  <a class="fb-ic">
                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                  </a>
                  <!-- Twitter -->
                  <a class="tw-ic">
                    <i class="fab fa-twitter white-text mr-4"> </i>
                  </a>
                  <!-- Google +-->
                  <a class="gplus-ic">
                    <i class="fab fa-google-plus-g white-text mr-4"> </i>
                  </a>
                  <!--Linkedin -->
                  <a class="li-ic">
                    <i class="fab fa-linkedin-in white-text mr-4"> </i>
                  </a>
                  <!--Instagram-->
                  <a class="ins-ic">
                    <i class="fab fa-instagram white-text"> </i>
                  </a>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row-->

            </div>
          </div>

          <!-- Footer Links -->
          <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Wiwa.ng</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>We connect buyers to seller. By giving out sellers contact to buyers. We do not bear any risk for the buyers. We only provide a platform</p>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Products</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <a href="#!">Laptops</a>
                </p>
                <p>
                  <a href="#!">Phones</a>
                </p>
                <p>
                  <a href="#!">Cars</a>
                </p>
                <p>
                  <a href="#!">Clothings</a>
                </p>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <a href="#!">Your Account</a>
                </p>
                <p>
                  <a href="#!">Sell your products</a>
                </p>
                <p>
                  <a href="#!">Help</a>
                </p>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <i class="fas fa-home mr-3"></i>  Akwa Ibom, Nigeria</p>
                <p>
                  <i class="fas fa-envelope mr-3"></i> info@Wiwa.ng</p>
                <p>
                  <i class="fas fa-phone mr-3"></i> + 234 70335 152 60</p>
                <p>
                  <i class="fas fa-print mr-3"></i> + 234 70335 152 60</p>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Footer Links -->

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="Wiwa.ng"> Wiwa.ng</a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->



<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script id="rendered-js">
jQuery(document).ready(function ($) {
  tab = $('.tabs h3 a');

  tab.on('click', function (event) {
    event.preventDefault();
    tab.removeClass('active');
    $(this).addClass('active');

    tab_content = $(this).attr('href');
    $('div[id$="tab-content"]').removeClass('active');
    $(tab_content).addClass('active');
  });
});
//# sourceURL=pen.js
    </script>
	
	<script type="text/javascript">
	function openFunction(){
		document.getElementById("menu").style.width="308px";
		document.getElementById("mainbox").style.marginLeft="0px";
	}
	
	function closeFunction(){
		document.getElementById("menu").style.width="0px";
		document.getElementById("mainbox").style.marginLeft="0px";
	}

</script>
</body>
</html>