<?php

// connexion to bdd
// create table
// insert
// select


const DB_HOST = 'localhost';
const DB_NAME = 'testbdd';
const DB_USER = 'root';
const DB_PASS = '';


$db = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sqlCreate = "CREATE TABLE IF NOT EXISTS Chanteur(
  id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Nom VARCHAR(30) NOT NULL,
  Prenom VARCHAR(30) NOT NULL
  )";

$db->exec($sqlCreate);
echo "Table créée! ".'<br>';


$sqlInsert = "INSERT INTO Chanteur (Nom, Prenom)
VALUES ('HALLYDAY', 'JOHNNY')";

$db->exec($sqlInsert);
echo "Johnny inséré!".'<br>';

$sql = "SELECT Nom, Prenom FROM Chanteur";
$result = $db->query($sql);

if ($result->rowCount() > 0) {
    // output data of each row
    while($row = $result->fetch()) {
        echo " Name: " . $row["Nom"]. " " . $row["Prenom"]. "<br>";
    }
} else {
    echo "0 results";
}
