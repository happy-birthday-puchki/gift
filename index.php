<!DOCTYPE html>
<html>
<head>
	<title>Happy Birthday Bonu 😘😘</title>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<style type="text/css">
		html{
			scroll-behavior: smooth;
		}
		body{
            background: #DA22FF;
            background: -webkit-linear-gradient(to right, #9733EE, #DA22FF);
            background: linear-gradient(to right, #9733EE, #DA22FF);
		}
		.main{
			text-align: center;
		}
		.heading{
			color: white;
			margin: 18vh auto;
			height: 45vh;
			text-shadow: 0 0 5px white;
			font-family: 'Indie Flower', cursive;
		}
		.wish-details{
			color: black;
			margin: 28vh auto;
			height: 65vh;
			font-family: 'Architects Daughter', cursive;
		}
		.head-one{
			font-size: 20px;
		}
		input, textarea{
			color: black;
			width: 200px;
			border: none;
			outline-width: 0;
			padding: 8px;
			background: white;
			border: 3px solid #FF7F50;
			border-radius: 5px;
		}
		textarea{
			width: 200px;
			height: 120px;
		}
		#sendWish{
			background: #FF7F50;
			color: white;
			text-shadow: 0 0 10px white;
			box-shadow: 0 0 10px #FF7F50;
			text-align: center;
			width: 220px;
		}
		i{
		    color: #FF7F50;
			text-shadow: 0 0 10px #FF7F50;
			font-size: 40px;
		}
		.down{
		    color: white;
		    font-size: 20px;
			text-shadow: 0 0 10px white;
		}
		#GoDown{
			font-family: 'Indie Flower', cursive;
		}
		.wishLogo{
			color: white;
			font-size: 30px;
			text-shadow: 0 0 5px white;
			letter-spacing: 3px;
			border-bottom: 2px solid white;
			width: 300px;
			font-family: 'Pacifico', cursive;
		}
		a{
			text-decoration: none;
			color: #FF7F50;
			font-weight: 5px;
		}
	</style>
</head>
<body>
<div class="main">
<div class="heading">
	<img src="letter.png" data-aos="zoom-out" data-aos-duration="3000" height="150" width="150" alt="Loading Letter">
	<h1 class="head-one" data-aos="fade-right" data-aos-duration="2000">
	<font color="red" style="text-shadow: none;">❤️</font> Happy Birthday Puchki <font color="red" style="text-shadow: none;">❤️</font></h1>
	<p class="head-two" data-aos="fade-right" data-aos-duration="3000">Today is my sister's Birthday. Hope you don't mind🥰. Can you send your good wishes to her on her birthday💖. Just fill up the boxes below and press on send wish🥰</p>

</div>
<div id="GoDown" data-aos="slide-down">
<a href="#mssgform">
<b class="down">Click here</b><br>
<i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-down" aria-hidden="true"></i>
</a>
</div>
<br><br>
<div class="wish-details" id="mssgform" align="center">
<form method="post" action="?">
	<h1 class="wishLogo" data-aos="fade-up" >WISH HER</h1><br>
	<p data-aos="fade-up">* Enter your name below</p>
	<input data-aos="fade-up" type="text" name="user" placeholder="Enter your fullname..." autocomplete="off" required><br><br>
	<p data-aos="fade-up">* Type birthday wish here</p>
	<textarea data-aos="fade-up" name="message" placeholder="Type a birthday wish for her" required></textarea><br><br>
	<input type="submit" id="sendWish" name="submit" value="Send Wish">
</form>
</div>
</div>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>