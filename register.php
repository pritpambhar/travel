<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form method="post">
    	email:<input type="email" name="email" />
        <br />
        password:<input type="password" name="password" />
        <br />
        <input type="submit" name="submit" value="submit" />
</form>
    <?php
		if(isset($_POST["submit"]))
		{
			$con=mysqli_connect("localhost","root","root","test_db");
			$cmd=mysqli_query($con,"insert into register (email,password) values ('".$_POST["email"]."','".$_POST["password"]."')");
		}
	?>
</body>
</html>