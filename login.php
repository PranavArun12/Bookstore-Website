<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<link rel="stylesheet" type="text/css" href="style3.css">
	 <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var usernameError = document.getElementById("username-error");
            var passwordError = document.getElementById("password-error");

            // Check if username is empty or doesn't contain an @ symbol
            if (username === "" || username.indexOf("@") === -1) {
                usernameError.innerHTML = "Please enter a valid email address";
                return false;
            } else {
                usernameError.innerHTML = "";
            }

            // Check if password is empty or doesn't contain at least one number and one special character
            if (password === "" || !/[0-9]/.test(password) || !/[^A-Za-z0-9]/.test(password)) {
                passwordError.innerHTML = "Please enter a valid password (at least one number and one special character)";
                return false;
            } else {
                passwordError.innerHTML = "";
            }

            // If both fields are valid, return true to submit the form
            return true;
        }
    </script>

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
