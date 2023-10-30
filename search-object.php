<?php

require_once 'table-shows.php'; 

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $results = [];

    foreach ($shows as $show) {
        if (stripos($show->getTheater(), $search)!== false || stripos($show->getName(), $search)!==false)   {
            $results[] = $show;
        }
    }

    if (!empty($results)) {
        echo "<h2>Résultats de la recherche pour \"$search\" :</h2>";

        foreach ($results as $show) {
            echo "<h3>Name: {$show->getName()}</h3>";
            echo "<p>theater: {$show->getTheater()}</p>";
            echo "<p>Date: {$show->getDate()}</p>";
            
        }
    } else {
        echo "<p>Aucun résultat trouvé pour \"$search\".</p>";
    }
} else {
    echo "<p>Veuillez entrer un terme de recherche.</p>";
}
require_once 'layout/footer.php';
?>