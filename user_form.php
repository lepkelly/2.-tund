<?php

	// user_form.php
	
	//jutumärkide vahele input elemendi NAME
	//echo $_POST["email"];
	//echo $_POST["password"];
	
	$email_error = "";
	
	
	//Kontrolli ainult siis kui kasutaja vajutab logi sisse nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
		//Kontrollime kasutaja e-posti, et see ei ole tühi
		if(empty($_POST["email"])) {
			$email_error = "ei saa olla tühi";
		}	
		
		//Kontrolli parooli
		if(empty($_POST[password])) {
			$email_error = "sisesta parool";
		}
	
?>

<html>
	<head>
		<title>User login page</title>
	</head>
	<body>
	
		<h2>Login</h2>
		<form action="user_form.php" method="get">
			<input name="email" type= "email"  placeholder="E-post"> <?php echo $email_error;?>	<br> <br>
			<input name="password" type= "password"  placeholder="parool">
		
			<input type="submit" value= "Logi sisse"> 
		</form>
		<h2>Create user</h2>
		
	
	</body>
</html>