<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root. 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

// echo APP_PATH . '<br>' . FILES_PATH . '<br>' . VIEWS_PATH;


require APP_PATH . 'App.php';
require APP_PATH . 'helper.php';

$files = getTransactionFiles(FILES_PATH);

$transactions = [];

foreach($files as $file) 
{
    $transactions = array_merge($transactions, getTransaction($file, 'extractTransaction'));
}
 
// echo '<pre>';
// print_r($transactions);
// echo '</pre>';

$totals = calculateTotals($transactions);


require VIEWS_PATH . 'transactions.php';
