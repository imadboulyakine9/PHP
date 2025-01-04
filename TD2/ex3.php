<?php
$conn = mysqli_connect_error("localhost", "root", "","php_td2_ex3") or die(mysqli_connect_error());
$request = "INSERT INTO users (name, email, password) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["password"]."')";