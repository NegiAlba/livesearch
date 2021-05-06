<?php
require 'fonctions.php';
$name = $_POST['name'];
$category = $_POST['category'];

$data = searchData($name, $category);

echo json_encode($data);
