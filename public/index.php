<?php
// Start session for authentication
session_start();

// Simple routing
$page = $_GET['page'] ?? 'landing';

// Validate page parameter
$validPages = ['landing', 'auth', 'dashboard', 'tickets'];
if (!in_array($page, $validPages)) {
    $page = 'landing';
}

// Include the appropriate page
$pageFile = __DIR__ . '/../pages/' . $page . '.php';

if (file_exists($pageFile)) {
    include $pageFile;
} else {
    http_response_code(404);
    echo "Page not found";
}
