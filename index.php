<?php
require_once __DIR__ . '/classes/dipendenti.php';
require_once __DIR__ . '/classes/dirigente.php';
require_once __DIR__ . '/classes/operaio.php';

$paleo = new Dirigente('12345', 'Stefano', 'Paleo', 'via Roma', 'cbvnusahgan', 'it77sdvsadv31e31', 3);
var_dump($marco);

try {
    $paleo->setBonus(5);
} catch (Exception $e) {
    echo 'errore' . $e->getMessage();
}
var_dump($paleo);

echo $paleo->getBonus();
