<?php
// helper.php
session_start();

function connectDb($dbname='', $login = 'root', $password = '', $port='3306', $host = 'localhost') {
    try {
        // Essaie de faire ce script...
        $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port='.$port, $login, $password);

        return $bdd;
    }
    catch (Exception $e) {
        // Sinon, capture l'erreur et affiche la
        die('Erreur : ' . $e->getMessage());
    }
}

function dd($dump) {

    echo "<pre>";
    var_dump($dump);
    echo "</pre>";

    die();
}
