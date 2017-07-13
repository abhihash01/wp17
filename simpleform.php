<!doctype html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="" method="post">
<label>Username:</label><input type="text" name="username"><br/>
<label>email</label><input type="text" name="email"><br/>
<input type="submit" value="Login" name="submit"><br/>
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['username']) && !empty($_POST['password'])){
 echo "hello";
 else
 echo "Required All fields!";
 }
}
?>
</body>
</html>