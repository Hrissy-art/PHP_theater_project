<?php require_once 'functions/db.php';

$pdo = getConnection();


// Soit un PDOStatement, soit false
$stmt = $pdo->query("SELECT * FROM show_actuality");

if ($stmt === false) {
    echo "Erreur lors de la requête";
    exit;
}

while ($row = $stmt->fetch()) {
   
    echo $row['title']." ". $row['texte']. " " . $row['image'];
}
