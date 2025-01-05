<form method="POST" action="ex5.php">
    <select name="operation">
        <option value="ordinateurs">ordinateurs</option>
        <option value="imprimantes">imprimantes</option>
        <option value="usb">usb</option>
        <option value="scanner">ecrans</option>
    </select>
    <input type="submit" value="Submit">
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "php_td2_ex5") or die(mysqli_connect_error());
function show($value, $conn){
    $req = "SELECT * FROM produits WHERE ID_CAT = '$value' ";
    $result =  mysqli_query($conn, $req);
    echo "<table border='1'>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prix</th>
        <th>quantite</th>
    </tr>";
    while ($record = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$record['ID_PROD']}</td>
            <td>{$record['DESIGNATION']}</td>
            <td>{$record['PRIX']}</td>
            <td>{$record['QUANTITE']}</td>
        </tr>";
    }
    echo "</table>";
}

$operation = $_POST["operation"];
if($operation == "ordinateurs"){
    show(1, $conn);
}
if($operation == "imprimantes"){
    show(2, $conn);
}
if($operation == "usb"){
    show(3, $conn);
}
if($operation == "scanner"){
    show(4, $conn);
}
?>