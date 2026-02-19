<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "film_azione";


$connessione = new mysqli( $host, $user ,$password, $db);


if($connessione === false){
    die ("errore connessione" . $connessione -> connect_error);
    }

    // $sql = "CREATE DATABASE IF NOT EXISTS film_azione";

    // if($connessione -> query($sql) === true){
    //     echo "database creato con successo";
    // } else {
    //     echo "database gia esistene" . $connessione -> error;
    // }

    // $sql = "CREATE TABLE registi(
    //     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     nome VARCHAR(30),
    //     nazionalità VARCHAR(30)
    // )";

    // $sql = "CREATE TABLE film(
    //      id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //      titolo VARCHAR(30),
    //      anno VARCHAR(30),
    //      regista_id INT,
    //      FOREIGN KEY (regista_id) REFERENCES registi(id)
    // )";

    // $sql = "CREATE TABLE recensioni(
    //     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     film_id INT,
    //     FOREIGN KEY (film_id) REFERENCES film(id),
    //     voto INT NOT NULL,
    //     commento VARCHAR(255)
    // )";

    // if($connessione -> query($sql) === true){
    //     echo "tabelle create con successo";
    // } else {
    //     echo "errore nella generazione delle tabelle " . $connessione -> error;
    // }

    // $sql = "INSERT INTO registi(nome, nazionalità) VALUES
    //     ('James Cameron', 'USA'),
    //     ('Brad Pitt', 'USA'),
    //     ('Miriam','Leone')";

    // $sql = "INSERT INTO film(titolo, anno, regista_id) VALUES
    //     ( 'Pulp Fiction', '1990', '1'),
    //     ( 'Paura e delirio a Las Vegas', '2001', '1'),
    //     ( 'Mediterraneo', '2003', '3'),
    //     ( 'Fall Guy','2015', '2')";
 
    // $sql = "INSERT INTO recensioni(film_id, voto, commento) VALUES
    //     ('1', '10', 'shuahiuud'),
    //     ('2', '5', 'didsjiohds'),
    //     ('2', '7', 'dsdisincichcss'),
    //     ('4', '7', 'fhgfgfbfgbbfgfbg'),
    //     ('2', '7', 'gbfbggffgfgfgfg'),
    //     ('3', '8','scjsucasiucnscics')";

    //      if($connessione -> query($sql) === true){
    //     echo "popolamento inserito nelle tabelle con successo";
    // } else {
    //     echo "errore nel popolamento delle tabelle " . $connessione -> error;
    // }


    $sql = "SELECT film.titolo , registi.nome , film.anno
            FROM film JOIN registi
            ON film.regista_id = registi.id 
            WHERE film.anno > 1985 ";

    $risultato = $connessione -> query($sql);

    while ($row = $risultato -> fetch_assoc()){
        echo "il titolo è: " .$row['titolo']. " con attore: " .$row['nome'] . " è uscito nell'anno: ". $row['anno'] . "<br>"; 
    }

    //       if($connessione -> query($sql) === true){
    //     echo "popolamento inserito nelle tabelle con successo";
    // } else {
    //     echo "errore nel popolamento delle tabelle " . $connessione -> error;
    // }

?>