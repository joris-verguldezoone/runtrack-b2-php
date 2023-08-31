<?php

// Dans le dossier job-02, faites un fichier index.php. À l’intérieur de ce fichier, faites une
// fonction find_one_student(). Cette fonction devra retourner un tableau avec toutes les
// colonnes d’une ligne de la table student en fonction d’un email.
// Dans la suite de votre page index.php, faites un formulaire avec pour méthode get, un
// input de type text avec comme attribut name input-email-student et un bouton submit.
// Cet input doit permettre de récupérer toutes les informations de l’étudiant
// correspondant .

function find_one_student(string $email) :array {
    $db = new PDO('mysql:host=localhost;dbname=exo_sql;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM student WHERE email = :email');
    $query->bindParam(':email',$email, PDO::PARAM_STR);
    
    $query->execute();
    $result = $query->fetchAll();
    
    return $result;
}

// Pièges: 
// utiliser bindParam   

$result = find_one_student('arobin@louis.com');
var_dump($result);

?>