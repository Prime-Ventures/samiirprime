<!DOCTYPE html>
<html>

<head>

	<title>all items</title>
	<style type="text/css">
		

		
		.editform{
			width: 60%;
			padding: 20px;
			border: 3px solid black;
			border-radius: 50px;
			
			background-size: cover;
			
			margin-left:280px;
			
			font-family: arial;
			
			font-weight:bold;
			
			font-size:18px;
			
			color:black;
		}
		
.logo img 
{
	margin-top:10px;
	width: 100px;
	height: auto;
	float: left;
}


.navigation
{
	
	
	list-style: none;
	margin-top: 10px;
 float:right;
}

.navigation li
{
	display: inline-block;
	font-size:18px;
	font-family: arial;
	font-weight:bold;
}
.navigation button
{
opacity:0.7;
	color: black;
	
	padding: 3px 6px;
background-color:white;
	
font-family: arial;
font-weight:bold;
	font-size: 20px;
	text-transform: uppercase;
}
.navigation li.active a
{
	border: 1px solid black;
}
label
{
	color: black;
	
	font-size: 30px;
opacity:0.6;
	
font-family: arial;
font-weight:bold;
}
	.main
	{
		
		margin-top:10px;
		opacity:0.7;
	color: white;
	
	
background-color:black;
	
font-family: arial;
font-weight:bold;
	
	
	text-align:center;
	}
	
	
		.main h1{
			font-size:40px;
		}
		.main h2{
			font-size:18px;
		}
		h1{
				
font-family: arial;
font-weight:bold;
font-size:25px;
		opacity:0.6;
		}
	label{
						
font-family: arial;
font-weight:bold;
font-size:20px;
		
	}
			
	</style>
</head>
<body>


<div class="logo">
			
			<img src="wetulogo.png"><h1><br><br>Wetu Shopping<h1><br>
			
			</div>
				
   <!--<ul class = "navigation">
			
		
			
			
		<li><a href = ""></li></a>
			<li><button>CONTACT US</button></a></li>
		</ul>
		<BR><br>
		
			</div>!-->
			
			<div class="main">
			<h1>Administrator<h1><h2>Home/Available Products<h2>
			</div>
			
<center>
<h1>ADD YOUR ITEMS</h1></center><br><br><br><br>
		<form class="editform" action="wetudb.php" method="post">
			<label>Item:</label>
			<input type="text" name="item" required>
			<br><br>
			<label>Upload image:</label>
			<input type="file" name="pic" required>
			<br><br>
			<label>Price:</label>
			<input type="text" name="price" required>
			<br><br>
			<label>Amount:</label>
			<input type="text" name="amount" required>
			<br><br>
			<label>Branch:</label>
			<input type="text" name="branch" required>
			<br><br>
			<input type="submit" name="itemin" id="btns" value="Add Item">
		</form>
	
		<br>

</body>
</html>

