<?php
// Get the requested URL
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

// Simple routing logic
switch ($url) {
    case '':
    case 'home':
        include 'pages/home.php';
        break;
    default:
        include 'pages/404.php';
        break;
}

