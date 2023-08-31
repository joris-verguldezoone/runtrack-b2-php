<?php

function find_all_students() :array {
    $db = new PDO('mysql:host=localhost;dbname=exo_sql;charset=utf8', 'root', '');
    $recipesStatement = $db->prepare('SELECT * FROM student');
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();

    var_dump($recipes);

    return $recipes;
}

// Pièges: 
// retourner un tableau via la fetch
// Utiliser PDO
// Configurer correctement PhpMyAdmin

find_all_students();


?>