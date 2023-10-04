<?php

$data = [
    'title' => 'PHP Micro Start',
    'description' => 'Simple microservice with native PHP',
    'cyrillic' => 'Текст на кириллице',
    'path' => $_SERVER['REQUEST_URI'],
    'params' => $_GET,
];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data, 128 | 256);
exit();
