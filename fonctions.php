<?php
require 'db.php';
//? Fonction PHP : Je vais créer du code PHP que je veux pouvoir exécuter à nouveau à ma guise.
//* Je vais créer une fonction qui sert à récupérer les données : Ce sera une requête SELECT depuis la BDD.
function viewData()
{
    //! Je vais récupérer la variable $connect depuis le scope global (le namespace global)
    global $connect;

    //* J'initie ma requête SQL
    $query = "SELECT * FROM students";
    $stmt = $connect->query($query);
    $stmt->execute();
    //* Je récupère les données depuis la BDD dans une variable $data
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($data);
    //* Pour que ma fonction produise quelque chose (retourne une valeur par exemple, il faut que j'utilise return)
    return $data;
}

function searchData($name, $category)
{
    global $connect;
    $query = "SELECT * FROM students WHERE {$category} LIKE :name";
    $stmt = $connect->prepare($query);
    $stmt->execute(["name" => "%" . $name . "%"]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($data);
    //* Pour que ma fonction produise quelque chose (retourne une valeur par exemple, il faut que j'utilise return)
    return $data;
}

// function addition($nb1, $nb2)
// {
//     return $nb1 + $nb2;
// }
