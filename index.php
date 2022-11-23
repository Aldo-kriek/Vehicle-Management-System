<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta lang="EN">
    <meta charset="utf-8">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	
	
	

	
</head>
<body class= "bod" id=backg>



<h2>Login Screen</h2>
     <form action="login.php" method="post">
     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name" autocomplete="off"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" autocomplete="off"><br>

     	<button class="B_account"type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
		  
     </form>



</script>
</body>
</html>