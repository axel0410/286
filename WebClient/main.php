<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml" > 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Best Bib and Tucker</title>
<link rel="stylesheet" href="../css/styles.css"/>
<link rel="stylesheet" href="../css/search.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/index.js"></script>
<script src="../js/regcheck.js"></script>
</head>

<body>
	<header>
		<div id="main" class="container2">
			
			<h1>Best Bib and Tucker</h1>

			<nav>
				<ul>
					<li><a href="page1">About</a></li>
					<li><a href="page2">Products</a></li>
					<li><a href="page3">Account</a></li>
				</ul>
			</nav>

		</div>
	</header>

	<div class="topnav">
  		<a href="#page1"><img src="../css/logo.PNG" alt="Logo"></a>
 		<div class="search-container">
    		<form action="../Server/Search.php" method="POST">
      		<input type="text" placeholder="Search for clothing items..." name="search">
      		<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
  		</div>
	</div>


	<article id="page1">
    	<h2 style="color:white">About the Company</h2>
		<section>
				<p>Welcome to our clothing company</p>
				<p>Company Name: Best Bib and Tucker<br />
					Address: 42 Wallaby Way, Sydney<br />
					Contact Phone: 085555555<br />
					Email Address: BestBibTucker@outlook.com<br />
					Directors: Christopher Gemmell, Shane Martinez<br /><br /><br />

					Company Mission: To sell outstanding products<br />
					Ethos: To provide the best customer service and best clothing to all our customers, no matter how many limbs
					<br />
					Historical Glory: We have sold clothes to over 1,000,000 countries and people say they’re “not the best, but not the worst!”
					<br />
					Charitable Support Given to the Local Community: Donated clothes to people in need during the recent sharknado, we also support our local monkey bar club with top of the line socks! We even donated $5 to the United States Government 
					<br />

					Product Description:
					We sell anything you can wear!
					<br />
					</p>
		</section>
    </article>
    <article id="page2" hidden="hidden">
        <h2 style="color:white">Products</h2>

       <!-- <div class="container">
			<img src="images\BananaSocks.jpg" class="image"style="width:100%">
			<div class="middle">
			<div class="text">Banana Socks<br />$9.99</div>
		</div>

		<div class="container">
			<img src="images\TacoSocks.jpg" class="image"style="width:100%">
			<div class="middle">
			<div class="text">Taco Socks<br />$9.99</div>
		</div> -->
		<form action="../Server/Search.php" method="POST">
        	<input type="text" placeholder="Search.." name="search">
     		<input type="submit" value="Submit">
    	</form>

    	<form action="../Server/Categories.php" method="POST">
			<input type="radio" name="Category" value="Socks"> Socks<br>
			<input type="radio" name="Category" value="Shoes"> Shoes<br>
			<input type="radio" name="Category" value="Hoodies"> Hoodies<br>  
			<input type="submit" value="Submit">
		</form>

    </article>


    <article id="page3" hidden="hidden"">
        <h2 style="color:white">Account</h2>
        <?php
		if(isset($_SESSION['user_id']) && $_SESSION['priv']=='staff') : ?>

			<form action="../Server/UserSearch.php" method="POST">
  			<font color="white">Enter UserName to Search for the user:</font><br>
  			<input type="text" name="usersearch">
  			<input type="submit" value="Search">


  		<?php endif; ?>
  		<?php
        if(!isset($_SESSION['user_id'])) : ?>

       		 <form action="../Server/Server.php" method="POST">
  			<font color="white">Username:</font><br>
  			<input type="text" name="Username">
  			<br>
  			<font color="white">Password:</font><br>
  			<input type="Password" name="Password"><br>
  			Click <a href="#page4">here</a> to create a account.
  			<br><br>
  			<input type="submit" value="Login">
			</form> 
    	<?php else: ?>
    		<br>
			<form action="../Server/Logout.php">
				<input type="submit" value="Logout"/>
			</form>

    <?php endif; ?>


    </article>

    <article id="page4" hidden="hidden"">
        <h2 style="color:white">Sign Up</h2>
        <p id="error"></p>

        <form id="form1" action="../Server/Reg.php" method="POST" onsubmit="return Validate()">
        	Name: <br><input type="text" name="name" maxlength="25"><br>
        	Email: <br><input type="email" name="email" maxlength="40"><br>
        	UserName: <br><input type="text" name="uname" maxlength="10"><br>
        	Phone Number: <br><input type="tel" name="number" maxlength="14"><br>
        	Password: <br><input type="password" name="password" maxlength="12"><br>
        	<input type="submit", value="Register">
		</form> 
		<button onclick="Validate()">Validate</button>

    </article>


</body>
</html>