<?php include('server.php') ?>
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
	<link href="style.css" rel="stylesheet">
<style>
* {
@import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300);
  margin: 0;
  padding: 0; }

a {
  color: #666;
  text-decoration: none; }
  a:hover {
    color: #4FDA8C; }

input {
  font: 16px/26px "Raleway", sans-serif; }

body {
  color: #666;
  background-color: #f1f2f2;
  font: 16px/26px "Raleway", sans-serif; }

.form-wrap {
  background-color: #fff;
  width: 320px;
  margin: 3em auto;
  box-shadow: 0px 1px 8px #BEBEBE;
  -webkit-box-shadow: 0px 1px 8px #BEBEBE;
  -moz-box-shadow: 0px 1px 8px #BEBEBE; }
  .form-wrap .tabs {
    overflow: hidden; }
    .form-wrap .tabs h3 {
      margin-left: 110px;
      width: 50%; }
      .form-wrap .tabs h3 a {
        padding: 0.5em 0;
        text-align: center;
        font-weight: 400;
        background-color: #e6e7e8;
        display: block;
        color: #666; }
        .form-wrap .tabs h3 a.active {
          background-color: #fff; }
  .form-wrap .tabs-content {
    padding: 1.5em; }
    .form-wrap .tabs-content div[id$="tab-content"] {
      display: none; }
    .form-wrap .tabs-content .active {
      display: block !important; }
  .form-wrap form .input {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    color: inherit;
    font-family: inherit;
    padding: .8em 0 10px .8em;
    border: 1px solid #CFCFCF;
    outline: 0;
    display: inline-block;
    margin: 0 0 .8em 0;
    padding-right: 2em;
    width: 100%; }
  .form-wrap form .button {
    width: 100%;
    padding: .8em 0 10px .8em;
    background-color: green;
    border: none;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase; }
  .form-wrap form .checkbox {
    visibility: hidden;
    padding: 20px;
    margin: .5em 0 1.5em; }
    .form-wrap form .checkbox:checked + label:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1; }
  .form-wrap form label[for] {
    position: relative;
    padding-left: 20px;
    cursor: pointer; }
    .form-wrap form label[for]:before {
      content: '';
      position: absolute;
      border: 1px solid #CFCFCF;
      width: 17px;
      height: 17px;
      top: 0px;
      left: -14px; }
    .form-wrap form label[for]:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
      content: '';
      position: absolute;
      width: 9px;
      height: 5px;
      background-color: transparent;
      top: 4px;
      left: -10px;
      border: 3px solid #28A55F;
      border-top: none;
      border-right: none;
      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      transform: rotate(-45deg); }
  .form-wrap .help-text {
    margin-top: .6em; }
    .form-wrap .help-text p {
      text-align: center;
      font-size: 14px; }
</style>
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
	<a href="index.html" class="active"><i class="fa fa-home"></i>Home</a>
	<a href="product.html"><i class="fa fa-shopping-cart"></i>Connect to buyers</a>
	<a href="register.html"><i class="fa fa-home"></i>Sell</a>
	<a href="contact.php"><i class="fa fa-home"></i>Contact</a>
	<a href="#" class="closebtn" onclick="closeFunction()">&times;</a>
	</div>
  <div class="col"><h2><a href="index.html" style="color: black;">Wiwa</a></h2>
  </div>
  <div class="col">
	<div class="topnav">
  <a  href="index.html">Home</a>
  <a href="product.html">Buy</a>
  <a href="login.html" class="active">Sell</a>
    <a href="contact.php">Contact</a>
  <input type="search" class="look" placeholder="Search.."><span><button class="search">Search</button></span>
</div>
  </div>
</div>
</div>


<div class="form-wrap">
<div class="tabs">
<h3 class="signup-tab">Sign Up</h3>
</div>
<div class="tabs-content">
<div id="signup-tab-content" class="active">
<form class="signup-form" action="register.php" method="post">
  <?php include('errors.php'); ?>
<input type="email" class="input" name="email" value="<?php echo $email; ?>" id="user_email" autocomplete="off" placeholder="Email">
<input type="text" class="input" name="username" value="<?php echo $username; ?>" id="user_name" autocomplete="off" placeholder="Username">
<input type="password" class="input" name="password_1" id="user_pass" autocomplete="off" placeholder="Password">
<input type="password" class="input" name="password_2" id="user_pass" autocomplete="off" placeholder="confirm Password">
<input type="submit" class="button" name="reg_user" value="Sign Up">
</form>
<div class="help-text">
  <p><a href="login.php" style="font-size: 24px; color: green; text-shadow: 1px 1px 2px grey; text-decoration: none;">Login</a></p>
<p>By signing up, you agree to our</p>
<p><a href="#">Terms of service</a></p>

</div>
</div>
</div>
</div>
</div>

<br>
<br><br>
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