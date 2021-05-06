<?php

try {
    $connect = new PDO("mysql:host=localhost;dbname=dwfs2021", 'root', '');
    // Définir le mode d'erreur de PDO sur Exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {

    echo 'Erreur: ' . $error->getMessage();
    // echo "Erreur: { $error->getMessage() }";

}
