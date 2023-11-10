<?php 
class Utils
{
    // public const SUCCES_INSCRIPTION = "You have been registered";
    public static function redirect(string $location): void
    {
        header('Location: ' . $location);
        exit;
    }
}