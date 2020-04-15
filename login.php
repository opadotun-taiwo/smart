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

  .form-wrap #login-tab-content  { margin: 10px; }

    .form-wrap  h3 {
      margin-left: 110px;
      width: 50%; }
    
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
	<a href="register.php"><i class="fa fa-home"></i>Sell</a>
	<a href="contact.php"><i class="fa fa-home"></i>Contact</a>
	<a href="#" class="closebtn" onclick="closeFunction()">&times;</a>
	</div>
  <div class="col"><h2><a href="index.html" style="color: black;">Wiwa</a></h2>
  </div>
  <div class="col">
	<div class="topnav">
  <a  href="index.html">Home</a>
  <a href="product.html">Buy</a>
  <a href="register.php" class="active">Sell</a>
    <a href="contact.php">Contact</a>
  <input type="search" class="look" placeholder="Search.."><span><button class="search">Search</button></span>
</div>
  </div>
</div>
</div>

<br/>



<div class="form-wrap">

  <h3>Login</h3>
<div id="login-tab-content">
  <form class="login-form" action="login.php" method="post">

  <?php include('errors.php'); ?>

<input type="text" class="input" name="username"  id="user_login" autocomplete="off" placeholder="Username">
<input type="password" class="input" name="password"  id="user_pass" autocomplete="off" placeholder="Password">
<input type="checkbox" class="checkbox" id="remember_me">
<label for="remember_me">Remember me</label>
<input type="submit" class="button" name="login_user"  value="Login">
</form>
<div class="help-text">
<p><a href="#">Forget your password?</a></p>
</div>
</div>
</div>




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