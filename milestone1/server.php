<?php
require __DIR__ . '/database.php';

$json = json_encode($faqs);

header('Content-Type: application/json');

echo $json;
?>