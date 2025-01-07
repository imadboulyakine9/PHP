<form method="post" action="ex1_post.php">
    Pseudo: <input type="text" name="pseudo">
    Message: <input type="text" name="message">
    <input type="submit" value="SEND">
</form>

<?php 
try {
    $conn = new PDO('mysql:host=localhost;dbname=php_td3_ex1;port=3306' ,'root', ''); 
} catch(Exception $error) {
    die('Erreur : ' . $error->getMessage());
}
$rep = $conn->query("SELECT * FROM minichat ORDER BY ID DESC");

while ($data = $rep->fetch()) {
    echo $data['pseudo'] . ': ' . $data['message'] . '<br/>';
}
?>