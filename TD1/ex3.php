<?php

$mystring = "HelloWorld";
$mylist = str_split($mystring);
$output = "nothing";
foreach ($mylist as $char) {
    echo $char;
    echo "<br>";
    if (preg_match('/[a-zA-Z]/', $char)) {
        
    }
    else {
        $only = "nothing";
    }
}

echo $only ? "Only letters" : "Not only letters";