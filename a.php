<?php



if(isset($_POST['submit']))
{
	if(empty($_POST['name']) || empty($_POST['password'])){
		echo "Please fill both fields";
	}
	else{
		$name=$_POST['name'];
		$paswd=$_POST['password'];
		echo $name ."".$paswd;
	}
}

?>




<!doctype html>

<html>
	<head>
		<title>my home page</title>
	</head>
            
	<body>
 		<div id="div1">
			<form method="POST"action="">	
				Name<input placeholder="Name" type="text"name="name"><br> 
				password<input type="password"name="password"><br>
            	<button type="submit"name="submit">submit</button> 
			</form>
		</div>
    </body>		
</html>