<form method="post" action="ex4.php">
    <input type="text" name="username" >
    <input type="password" name="password" >
</form>

<?php


$username = $_POST["username"];
$password = $_POST["password"];

$conn = mysqli_connect("localhost", "root", "","php_td2_ex4") or die(mysqli_connect_error());

$requete = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $requete) or die(mysqli_error($conn));
?>
   
