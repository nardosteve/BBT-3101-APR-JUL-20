<?php

$kusoma_rel_path = '../app/kusoma.php';

require_once $kusoma_rel_path;

#json function call
$jsonPath = '../fs/books.json';

$books = kusomaJSON($jsonPath);
#var_dump($books);

#csv function call
$csvPath = '../fs/data.csv';
$data = kusomaCSV($csvPath);
#var_dump($data);

#ks function call
$ksPath = '../fs/settings.ks';
$settings = kusomaKS($ksPath);
#var_dump($settings);
