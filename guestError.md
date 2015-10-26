<html>
<head>
	<link rel="StyleSheet" type="text/css" href="Style.css" media="all" />
	<title> Guest Page </title>
</head>

<body>

<div id="header">
	<img alt="" align="left" width="90" height="90" src="csm.png" />
	<h1>Brought to you by MARWAN</h1>
</div>

<div>
<div id="verticalmenu">
	<li><a class="black" href="index.html">Home</a> </li>
	<li><a class="black" href="About.html">About Me</a> </li>
	<li><a class="black" href="#">Courses</a>
	<ul>
    		<li><a class="black" href="#">CP1</a> </li>
    		<li><a class="black" href="#">CP2</a> </li>
    		<li><a class="black" href="#">CP3</a> </li>
    		<li><a class="black" href="#">Discrete</a> </li>
    		<li><a class="black" href="#">Database</a> </li>
    		<li><a class="black" href="#">OS</a> </li>
	</ul>

	</li>
	<li><a class="black" href="guest.html">Guest Book</a> </li>
</div>

<div id="section">
	<div id="content">
		<form method="post" action="login.php">
   			<input placeholder="Username" name="username" type="text" /> Username Already taken!<br>
    			<input placeholder="First name" name="fname" type="text" /><br>
    			<input placeholder="Last name" name="lname" type="text" /><br>
  			<input placeholder="Email" name="email" type="text" /><br>
   			<input placeholder="message" name="message" type="text" /><br>
    			<input type="submit" value="Hit Me!" />
		</form>
	</div>
</div>


<div id="adsection"></div>
</div>

<div id="footer">Copyright &copy; Marwan's Co</div>

</body>

</html>
