<?php

require_once  __DIR__ ."/../functions/db.php";


class ContactData
{
    private $pdo;

    //  la connexion à la base de données est établie grâce à la fonction getConnexion
    public function __construct()
    {
        $this->pdo = $this-> getConnection();
    }

    public function getConnection()
    {
        return getConnection();
    }
    // Cette méthode prend les paramètres du formulaire de contact (nom, email, message) et les insère dans la base de données:
    public function insertContact($name, $email, $message)
    {
        $stmt = $this->pdo->prepare("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':message', $message, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
