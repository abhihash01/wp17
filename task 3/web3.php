<!doctype html>
<html>
<head>
<title>User Registration</title>
</head>
<body>
<h1>User Registration</h1>
<form action="" method="post">
<label>Name :</label><input type="text" name="name"><br/><br/>
<label>Phone number :</label><input type="text" name="phone_number"><br/><br/>
<label>Email :</label><input type="text" name="email"><br/><br/>
<input type="submit" value="Register" name="submit"><br/><br/>
<!-- Login Link -->
<a href="login.php">Login</a>
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['name']) && !empty($_POST['phone_number'])){
 $name = $_POST['name'];
 $phone_number = $_POST['phone_number'];
 $email=$_POST['email'];
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'registrations') or die("DB Error"); // Select DB from database
 //Selecting Database
 $query = mysqli_query($conn, "SELECT * FROM registrations WHERE phone_number='".$phone_number."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 {
 //Insert to Mysqli Query
 $sql = "INSERT INTO registrations(Name,Phone_number,Email) VALUES('$name','$phone_number','$email')";
 $result = mysqli_query($conn, $sql);
 //Result Message
 if($result){
 echo "Your data entered successfully";
 }
 else
 {
 echo "Failure!";
 }
 }
 else
 {
 echo "you have already registered with the phone number you entered, try a different number";
 }
 }
 else
 {
 ?>
 <!--Javascript Alert -->
 <script>alert('Required all felds');</script>
 <?php
 }
}
?>
</body>
</html>