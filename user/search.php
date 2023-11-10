 <?php
require_once __DIR__ . '/../functions/db.php';
require_once __DIR__ . '/../layout/header.php';


if (isset($_GET['search'])) {
    $searchTerm = '%' . $_GET['search'] . '%';

    $pdo = getConnection();
    $query = "SELECT * FROM show_actuality WHERE title LIKE :searchTerm";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo '<h2>Search Results:</h2>';
        while ($row = $stmt->fetch()) {
            echo '<h3>' . $row['title'] . '</h3>';
            echo '<p>' . $row['texte'] . '</p>';
            echo '<div class="col-md-9 col-sm-6">';
            echo '<img src="/img/' . $row['image'] . '" alt="Image en taille réelle" class="img-fluid">';
            echo '</div>';
            echo '<p>Date : ' . $row['date_actu'] . '</p>';
        }
    } else {
        echo 'No results found.';
    }
}

require_once __DIR__ . '/../layout/footer.php';
?> 