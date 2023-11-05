<?php 

class ContactForm {
    public function processForm() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            Utils::redirect('contact.php');
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $db = new ContactData();
        if ($db->insertContact($name, $email, $message)) {
            echo 'Your message has been sent.';
        } else {
            echo 'Erreur';
        }
    }
}