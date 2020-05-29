<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div id="frm">
    	<form action="process.php" method="POST">
    		<p>
    			<label>Username:</label>
    			<input type="text" name="user" id="user"/>
    			</p>
    		<p>
    			<label>Password:</label>
    			<input type="password" name="pass" id="pass"/>
    			</p>
    		<p>
    			<input type="Submit" value="login" id="btn"/>
    			</p>
    	</form>
    </div> 

</body>
</html>