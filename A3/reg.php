<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>KFC</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript"></script>
		<script src="js/reg.js"></script>
	</head>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<body>
	<header>
			<a href="reg.html"><img src="img/logoKFC.png" width="200" height="80" alt=""/></a>
			<nav>
				<ul class="header">
				<li><a href="../Homepage.php">HOME</a></li>
					<li><a href="menu.php">MENU</a></li>
					<li><a href="order.php">ORDER</a></li>
					<li><a href="reg.php">SIGN IN</a></li>
				</ul>
			</nav>
	</header>
	<div class="content">
		<div class="title" style="font-weight: bold;">REGISTER AND GET REWARDED</div><br>
		<div class="title" style="font-size: 20px;">Join the KFC family to enjoy exclusive perks and discounts. It’s free!
			Psst, you’ll also receive an RM10 e-voucher for Delivery and Self Collect orders!</div>
		<div class="break"></div> 
	  	<form name="form" onsubmit="return validateForm()" action="menu.html" method="post">
	    <div class="user-details">
			  <div class="subtitle">PERSONAL DETAILS</div>
				<br> 
					<div class="input-box">
						<span class="fname">First Name:</span>
						<input type="text" name="fname" required>
					</div>
					<div class="input-box">
						<span class="lname">Last Name:</span>
						<input type="text" name="lname" required>
					</div>
			  <div class="input-box">
						<span class="phone">Phone Number:</span>
						<input type="text" name="phone" required>
			  </div>
			  <div class="input-box">
				<span class="email">Email address:</span>
				<input type="email" name="email" required>
	           </div>
			  <div class="input-box">
						<span class="password">Password (8 to 15 characters):</span>
						<input type="password" name="password" required maxlength="15" minlength="8">
		     </div>
			 <div class="input-box">
				<span class="password1">Confirm Password:</span>
				<input type="password" name="password1" required maxlength="15" minlength="8">
	 		 </div>
			<br> 
				<div class="shipping-details">
				<div class="subtitle">DELIVERY ADDRESS</div>
					<div class="break2"></div> 
				  <div class="input-box">
						<span class="address1">Address 1:</span>
						<input type="text" name="address1" required>
				  </div>
				  <div class="input-box">
						<span class="address2">Address 2:</span>
						<input type="text">
				  </div>
				  <div class="input-box">
						<span class="state">State:</span>
						<input type="text" name="state" required>
				  </div>
				  <div class="input-box">
						<span class="postal">Postal Code:</span>
						<input type="text" name="postal" required>
				  </div>
				</div>
			</div>
		  <p><br>
		    <div style="text-align: center;"><input class="submit" type="submit" name="submit" value="REGISTER"></div>
	    </p>
	  </form>
	</div>
</body>
</html>
