<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/api') {
    $data = [
        'title' => 'PHP Micro Start',
        'description' => 'Simple microservice with native PHP',
    ];
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data, 128 | 256);
    exit();
}

$file = $uri === '/' ? 'main.html' : '404.html';

echo file_get_contents($file);
