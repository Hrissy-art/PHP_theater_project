<!-- <?php
require_once 'functions/db.php';
require_once 'layout/header.php';

if (isset($_GET['q'])) {
    $searchTerm = '%' . $_GET['q'] . '%';

    $pdo = getConnection();
    $query = "SELECT * FROM show_actuality WHERE title LIKE :searchTerm";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo '<h2>Search Results:</h2>';
        while ($row = $stmt->fetch()) {
            echo '<h3>' . $row['title'] . '</h3>';
            echo '<p>' . $row['texte'] . '</p>';
            echo '<p>Date : ' . $row['date_actu'] . '</p>';
        }
    } else {
        echo 'No results found.';
    }
}

require_once 'layout/footer.php';
?> -->