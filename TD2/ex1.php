
<form id="form" action="ex1.php" method="post">
    <input type="text" name="value1" >
    <select name="operation">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select>
    <input type="text" name="value2" >
    <input type="submit" value="Calculate">
</form>

<?php

$value1 = $_POST["value1"];
$value2 = $_POST["value2"];
$operation = $_POST["operation"];

    if($operation == "add"){
        echo $value1 + $value2;
    }
    if($operation == "sub"){
        echo $value1 - $value2;
    }
    if($operation == "mul"){
        echo $value1 * $value2;
    }
    if($operation == "div"){
        echo $value1 / $value2;
    }


?>