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





// header("Content-Type: application/json");
// header("Access-Control-Allow-Headers: X-Requested-With");
// header("Access-Control-Allow-Origin: http://localhost/php-oop-2");

// $jsonAccount = file_get_contents("account.json");
// $account = json_decode($jsonAccount, true);


// $nome = $_GET['nome'];
// $cognome = $_GET['cognome'];
// $accountpersona = [

//     'name' => $nome,
//     'lastname' => $cognome,
//     'registrato' => true,


// ];

// $account[] = $accountpersona;
// $jsonAccount = json_encode($account);
// file_put_contents("account.json", $jsonAccount);
// echo $jsonAccount;
