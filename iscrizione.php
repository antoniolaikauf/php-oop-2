<?php
$nome = $_GET['name'];
$cognome = $_GET['cognome'];
$account = [
    [
        'name' => $nome,
        'lastname' => $cognome,
        'registrato' => true,
    ],

];

$jsonAccount = json_encode($account);
file_put_contents("account.json", $jsonAccount);

