<?php

require_once __DIR__ . '/classes/AppError.php';
require_once __DIR__ . '/classes/Utils.php';
require_once __DIR__ . '/functions/db.php'; 

[
    'id_show' => $id_show,
    'title' => $title,
    'texte' => $text,
    'date_actu' => $date_actu
] = $_POST;

$pdo = getConnection();

$updStmt = $pdo ->prepare("UPDATE show_actuality SET title = :title, texte = :texte, date_actu = :date_actu WHERE id_show = :id_show");
$updStmt-> execute (
    [
        'id_show' => $id_show,
        'title' => $title,
        'texte' =>$text,
        'date_actu' => $date_actu
    ]
    );

    Utils::redirect('update.php');
