<html>
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/main.css">
<link rel="stylesheet" href="./css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
		<script type = "text/javascript" src = "./jq.js"></script>
		<script type = "text/javascript">
		$(document).ready(function(){
			$("input").focus(function() {
				$(this).addClass("focus");
			});
			
			$("input").blur(function() {
				$(this).removeClass("focus");
			});
		});
		</script>
	</head>
	
	<body>
		<div class="w3-sidebar w3-red w3-collapse w3-top w3-medium w3-padding" style="z-index:3;width:440px;font-weight:bold;" id="mySidebar"><br>
 
  <div class="w3-container" align="center">
    <h3 class="w3-padding-50"> <a href="./index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><b>SHA<br>HACKS<br>SIMULATOR</b></a> </h3>
  </div>
</div>
<div  class="w3-main" style="margin-left:460px;margin-right:40px">
		<center>
<h1>CSRF in Comment Box</h1><br><br>
		<h2>Enter to your Account</h2><br>
		
			<form action="" method="GET">
				Username : <input type="text" name="username" placeholder="" required><br><br>
				Password : <Input type="password" name="password" placeholder="" required><br><br>
				<input type="submit" value="Submit">
			</form><br><br>
			<h3>When you'll enter by this login form, you'll get a page with a Comment Box and with some type Ad which will redirect you to a type of unauthorized link.</h3>
			
</center>
</div>
</body>
</html>