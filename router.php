<?php
// Get the requested URL
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

// Simple routing logic
switch ($url) {
    case '':
    case 'home':
        include 'pages/home.php';
        break;
    case 'services':
        include 'pages/services.php';
        break;
    case 'contact':
        include 'pages/contact.php';
        break;
    case 'team':
        include 'pages/team.php';
        break;
    case 'about':
        include 'pages/about.php';
        break;
    default:
        include 'pages/404.php';
        break;
}
