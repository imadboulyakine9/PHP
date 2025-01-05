<?php


$username = $_POST["username"];
$password = $_POST["password"];

$conn = mysqli_connect("localhost", "root", "","php_td2_ex4") or die(mysqli_connect_error());

$requete = "SELECT * FROM utilisateurs WHERE Login = '$username' AND password = '$password'";
$result = mysqli_query($conn, $requete) or die(mysqli_error($conn));
if(mysqli_num_rows($result) == 0){
    echo "Login failed";
}
else{
    while($row = mysqli_fetch_assoc($result)){
        echo "Welcome ".$row['Login'];
    }
    
}

?>
   
