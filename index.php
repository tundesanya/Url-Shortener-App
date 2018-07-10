<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>URL Shortener</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-3.2.1.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	body, html {
	    height: 100%;
	    font-family: Arial, Helvetica, sans-serif;
	}

	* {
	    box-sizing: border-box;
	}

	.bg-img {
	    /* The image used */
	    background-image: url("img2.jpg");

	    min-height: 380px;

	    /* Center and scale the image nicely */
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
	}

	/* Add styles to the form container */
	.containerr {
	    position: absolute;
	    right: 0;
	    margin: 20px;
	    max-width: 300px;
	    padding: 16px;
	    background-color: #33b5e5;
	}

	.containerrr {
	    background-color: #33b5e5;
	    color: black;
	}

	/* Full-width input fields */
	input[type=url], input[type=submit] {
	    width: 100%;
	    padding: 15px;
	    margin: 5px 0 22px 0;
	    border: none;
	    background: #f1f1f1;
	}

	input[type=url]:focus, input[type=submit]:focus {
	    background-color: #ddd;
	    outline: none;
	}

	/* Set a style for the submit button */
	.btn {
	    background-color: #4CAF50;
	    color: white;
	    padding: 16px 20px;
	    border: none;
	    cursor: pointer;
	    width: 100%;
	    opacity: 0.9;
	}

	.btnn {
	    background-color: #4CAF50;
	    color: white;
	    padding: 16px 20px;
	    border: none;
	    cursor: pointer;
	    width: 30%;
	    opacity: 0.9;
	}

	.btn:hover {
	    opacity: 1;
	}

	.centerr{
		float: right;
	}


	.jumbotron {
	      background-color: #f4511e;
	      color: #fff;
	      padding: 100px 25px;
	      background-image: url("img33.jpg");
	      
	  }
	  .container-fluid {
	      padding: 60px 50px;
	  }
	  .bg-grey {
	      background-color: #f6f6f6;
	  }
	  .logo {
	      font-size: 200px;
	  }
	  @media screen and (max-width: 768px) {
	    .col-sm-4 {
	      text-align: center;
	      margin: 25px 0;
	    }
	  }

	  .footer{
	  	background-color: black;
	  	color: white;
	  }

	</style>
	
</head>
<body class="">

		<!-- nav menu -->
	 <nav class="navbar navbar-default navbar-fixed-top containerrr">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">BPD</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#about">ABOUT</a></li>
	        <li><a href="#services">SERVICES</a></li>
	        <li><a href="#portfolio">PORTFOLIO</a></li>
	        <li><a href="#pricing">PRICING</a></li>
	        <li><a href="#contact">CONTACT</a></li>
	      </ul>
	    </div>
	  </nav> 
		


		<div class="jumbotron text-center">
		  <h1>BluePrint Designs</h1> 
		  <h3>We specialize in Energy and Url Shortening</h3> 
		  <form class="form-inline">
		      <div class="input-group">
		        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
		        <div class="input-group-btn">
		          <button type="button" class="btn btn-info btn-primary btn-md btn-default">Subscribe</button>
		        </div>
		      </div>
		  </form>
		</div>

			<!-- Main shortening form -->
			<div class="bg-img" >
				<?php
					if (isset($_SESSION['feedback'])) {
						echo "<p>{$_SESSION['feedback']}</p>";
						unset($_SESSION['feedback']);
					}
				?>

			  <form action="shorten.php" method="post" >
			    <div class="containerr">
			      <h1>Shorten a Url.</h1>

			      <label for="email"><b>URL SHORTENER</b></label>
			      <input type="url" name="url" placeholder="Enter a Url here." autocomplete="off" class="form-control">

			      <label for="psw"><b>PRESS BELOW</b></label>
			      <input type="submit" value="Shorten" class="btn btn-info btn-primary btn-md btn-default">

			      
			    </div>
			  </form>
			</div> 


			<!-- Container (About Section) -->
			<div class="container-fluid">
			  <div class="row">
			    <div class="col-sm-8">
			      <h2>About Company Page</h2>
			      <h4>Lorem ipsum..</h4>      
			      <p>Lorem ipsum..</p> <button class="btnn btn-info btn-primary btn-md btn-default" size="20">Get in Touch</button>
			     
			    </div>
			    <div class="col-sm-4">
			      <span class="glyphicon glyphicon-signal logo"></span>
			    </div>
			  </div>
			</div>

			<div class="container-fluid bg-grey">
			  <div class="row">
			    <div class="col-sm-4">
			      <span class="glyphicon glyphicon-globe logo"></span>
			    </div>
			    <div class="col-sm-8">
			      <h2>Our Values</h2>
			      <h4><strong>MISSION:</strong> Our mission is .........</h4>      
			      <p><strong>VISION:</strong> Our vision ........</p>
			    </div>
			  </div>
			</div>

			<footer class="footer">
		        <div class="media-container-row align-center mbr-white">
		            <div class="col-12">
		                <p class="mbr-text mb-0 mbr-fonts-style display-7">
		                    © Copyright 2018 - All Rights Reserved
		                </p>
		            </div>
		        </div>
		    </footer>
</body>
</html> 