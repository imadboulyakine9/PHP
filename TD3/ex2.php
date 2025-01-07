

<?php
$conn = mysqli_connect("localhost", "root", "", "php_td2_ex5") or die(mysqli_connect_error());
$req = "SELECT * FROM categories";
$result =  mysqli_query($conn, $req);
echo "<form method='POST' action='ex2.php'>";
echo "<select name='operation'>";
foreach ($result as $record) {
    echo "<option value='{$record['ID_CAT']}'>{$record['NOM_CAT']}</option>";
}
echo "<input type='submit' value='Submit'>";
echo "</select>";
echo "</form>";
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
    foreach($result as $record) {
        echo "<tr>
            <td>{$record['ID_PROD']}</td>
            <td>{$record['DESIGNATION']}</td>
            <td>{$record['PRIX']}</td>
            <td>{$record['QUANTITE']}</td>
        </tr>";
    }
    echo "</table>";
}
$value = ""


?>