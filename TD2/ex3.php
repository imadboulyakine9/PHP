<form method="POST">
    <input type="text" name="nom" >
    <input type="text" name="prenom" >
    <input type="number" name="salaire" value="1">
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "php_td2_ex3") or die(mysqli_connect_error());

$create_table_query = "
CREATE TABLE IF NOT EXISTS `personnes` (
    `id` int(11) NOT NULL,
    `nom` varchar(255) NOT NULL,
    `prenom` varchar(11) DEFAULT NULL,
    `salaire` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
mysqli_query($conn, $create_table_query);

$check_primary_key_query = "
SELECT COUNT(*) as cnt
FROM INFORMATION_SCHEMA.TABLE_CONSTRAINTS
WHERE TABLE_NAME = 'personnes' AND CONSTRAINT_TYPE = 'PRIMARY KEY';";
$result = mysqli_query($conn, $check_primary_key_query);
$row = mysqli_fetch_assoc($result);

if ($row['cnt'] == 0) {
    $add_primary_key_query = "ALTER TABLE `personnes` ADD PRIMARY KEY (`id`);";
    mysqli_query($conn, $add_primary_key_query);
}

$check_auto_increment_query = "
SELECT COUNT(*) as cnt
FROM INFORMATION_SCHEMA.COLUMNS
WHERE TABLE_NAME = 'personnes' AND COLUMN_NAME = 'id' AND EXTRA LIKE '%auto_increment%';";
$result = mysqli_query($conn, $check_auto_increment_query);
$row = mysqli_fetch_assoc($result);

if ($row['cnt'] == 0) {
    $set_auto_increment_query = "ALTER TABLE `personnes` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
    mysqli_query($conn, $set_auto_increment_query);
}
function makeit($key){
    if(isset($_POST[$key])){
        return $_POST[$key];
    }
    else{
        return 0;
    }
}
$nom = makeit("nom");
$prenom = makeit("prenom");
$salaire = makeit("salaire");

$insert_query = "INSERT INTO `personnes` (`nom`, `prenom`, `salaire`) VALUES ('$nom', '$prenom', '$salaire');";
mysqli_query($conn, $insert_query);

$select_query = "SELECT * FROM `personnes`;";
$result = mysqli_query($conn, $select_query);

echo "<table border='1'>
<tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>salaire</th>
</tr>";
while ($record = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$record['id']}</td>
        <td>{$record['nom']}</td>
        <td>{$record['prenom']}</td>
        <td>{$record['salaire']}</td>
    </tr>";
}
echo "</table>";

?>
<form method="POST">
    <input type="number" name="mod_id" value="1">
    <input type="text" name="mod_nom" >
    <input type="text" name="mod_prenom" >
    <input type="number" name="mod_salaire" value="1">
    <input type="submit" value="Submit" onclick="window.location.reload();">
    <input type="reset" value="Reset">
</form>
<?php
$mod_id = makeit("mod_id");
$mod_nom = makeit("mod_nom");
$mod_prenom = makeit("mod_prenom");
$mod_salaire = makeit("mod_salaire");

$mod_req = "UPDATE `personnes` SET `nom` = '$mod_nom', `prenom` = '$mod_prenom', `salaire` = '$mod_salaire' WHERE `id` = '$mod_id';";

$push_mod = mysqli_query($conn, $mod_req);
?>
<form method="POST">
    <input type="number" name="del_id">
    <input type="submit" value="Submit" onclick="window.location.reload();">
</form>
<?php
$del_id = makeit("del_id");
$del_req = "DELETE FROM `personnes` WHERE `id` = '$del_id';";
$push_del = mysqli_query($conn, $del_req);
?>