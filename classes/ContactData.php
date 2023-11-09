<?php 
require_once  __DIR__ ."/../functions/db.php";


class ContactData {
    private $pdo;

    public function __construct() {
        $this->pdo = $this-> getConnection();
    }

    public function getConnection() {
        return getConnection();
    }

    public function insertContact($name, $email, $message) {
        $stmt = $this->pdo->prepare("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':message', $message, PDO::PARAM_STR);
        return $stmt->execute();
    }
}