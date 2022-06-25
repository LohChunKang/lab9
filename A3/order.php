<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>KFC</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="js/cart.js"></script>
		
		
		<link href="css/style.css" rel="stylesheet" type="text/css">
		

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
	<div class="content2">
	  <div class="title" style="color: red;">ORDER DETAILS</div>
	  <div class="break"></div>
	  <table width="1000" class="summary" style="text-align: center;">
		<thead>
			<tr>
				<th>Num.</th>
				<th>Order</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody></tbody>
		</table>
	  <br><br>
		
		<table width="1000" class="summary2" style="padding-left: 600px;">
			<tr>
				<td >Subtotal</td>
				<td class="subtotal"></td>
			</tr>
			<tr>
				<td>Postage Fees</td>
				<td class="postage"></td>
			</tr>
			<tr>
				<td class="discount_rate">Discount</td>
				<td class="discount"></td>
			</tr>
			<tr>
				<td>Total</td>
				<td class="total"></td>
			</tr>	
		</table>
		<div class="break"></div>
		<div style="text-align: right;"><button type="button" onclick="confirmorder()" class="btnco">Check Out</button></div>
		<div class="break"></div>
		<div class="break"></div>
	</div>	
</body>
</html>
