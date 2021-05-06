<?php require 'fonctions.php'; ?>
<?php
$donnees = viewData();
// var_dump($data);
// echo '<pre>';
// var_dump($donnees);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livesearch</title>
</head>

<body>
    <h1> Live Search de l'index des élèves de la promo 2021 de Développeur Web Fullstack </h1>
    <form action="search.php" method="post">
        <input type="text" name="name" id="name" placeholder="Search by name here ..." oninput=search(this.value)>
        <input type="radio" name="category" id="blc1" value="firstname" checked>By First name</input>
        <input type="radio" name="category" id="blc2" value="lastname">By last name</input>
        <input type="radio" name="category" id="blc3" value="github">By Github Handle</input>
    </form>
    <ul id="data-list">
        <?php foreach ($donnees as $student) {
        ?>
            <li id=data-item<?php echo $student['id']; ?>><?php echo $student['firstname'] . ' ' . $student['lastname']; ?></li>
        <?php
        }
        ?>
    </ul>
    <script src="main.js"></script>
</body>

</html>