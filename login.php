<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<link rel="stylesheet" type="text/css" href="style3.css">

</head>
<body background="background11.jpg">

	<div class="login-box">
		<h2>Login Here</h2>
		
			<form method="post" action="login.php">
			<label for="username">Email ID</label>
			<input type="text" id="username" name="username">
			<span class="error" id="username-error"></span>
			<br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password">
			<span class="error" id="password-error"></span>
			<br>
			<input type="submit" value="Login" name="login_Btn">
	
</body>
</html>
<?php
$conn=mysqli_connect("localhost", "root", "");
if(isset($_POST['login_Btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM websitelogin.logindetails WHERE username='$username'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $resultPassword=$row['password'];
        if($password == $resultPassword){
            header('Location: website1.html');
        }else{
            echo "<script>
                alert('Login unsuccessful');
            </script>";
        }
    }
}
?>
