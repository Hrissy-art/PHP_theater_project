<?php
require_once __DIR__ . '/classes/AppError.php';
require_once __DIR__ . '/classes/Utils.php';
require_once __DIR__ . '/functions/db.php';

try {
    $pdo = getConnection();

    $title = $_POST['title'];
    $about = $_POST['about'];
    $date = $_POST['date_show'];
    $image = $_FILES['image_show'];

    $show_cathegory = $_POST['show_cathegory'];
    $art_director_name = $_POST['art_director_name'];
    $admin_author_name = $_POST['admin_author_name'];

    $query = "SELECT id_cathegory FROM cathegory WHERE show_cathegory = :show_cathegory";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':show_cathegory', $show_cathegory, PDO::PARAM_STR);
    $stmt->execute();
    $id_cathegory = $stmt->fetchColumn();

    $query = "SELECT id_art_director FROM art_director WHERE name = :art_director_name";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':art_director_name', $art_director_name, PDO::PARAM_STR);
    $stmt->execute();
    $id_art_director = $stmt->fetchColumn();

    $query = "SELECT id_admin FROM admin_author WHERE last_name = :admin_author_name";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':admin_author_name', $admin_author_name, PDO::PARAM_STR);
    $stmt->execute();
    $id_admin_author = $stmt->fetchColumn();

    if (!is_uploaded_file($image['tmp_name']) || $image['error'] !== UPLOAD_ERR_OK) {
        Utils::redirect('test.php?error=' . AppError::REGISTER_FILE_UPLOAD);
    }


    if (!move_uploaded_file ($image['tmp_name'], __DIR__ . '/img/' . $image['name'])) {
        Utils::redirect('test.php?error=' . AppError::REGISTER_FILE_UPLOAD);
    }

    $query = "INSERT INTO show_actuality (`id_cathegory`, `title`, `image`, `texte`, `date_actu`, `id_art_director`, `id_admin_author`) 
              VALUES (:show_cathegory, :title, :image_show, :about, :date_show, :art_director_name, :admin_author_name)";
    $stmtInsert = $pdo->prepare($query);
    $stmtInsert->execute([
        'show_cathegory' => $id_cathegory,
        'title' => $title,
        'image_show' => $image['name'],
        'about' => $about,
        'date_show' => $date,
        'art_director_name' => $id_art_director,
        'admin_author_name' => $id_admin_author
    ]);
    echo "Data added";
} catch (PDOException $e) {
    Utils::redirect('test.php?error=' . AppError::DB_CONNECTION);
}
?>
