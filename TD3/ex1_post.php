<?php 
try {
    $conn = new PDO('mysql:host=localhost;dbname=php_td3_ex1;' ,'root', ''); 
} catch(Exception $error) {
    die('Erreur : ' . $error->getMessage());
}

if (isset($_POST['pseudo']) && isset($_POST['message']) && !empty($_POST['pseudo']) && !empty($_POST['message'])) {
    $req = $conn->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
    $req->execute(array($_POST['pseudo'], $_POST['message']));
    echo 'Message successfully posted.';
} else {
    echo 'Pseudo and message are required.';
}
header('Location: ex1.php');
?>