<?php
/**
 * Simple Twig-like Templating System
 * Fallback when Composer/Twig is not available
 */

class SimpleTemplate {
    private $templateDir;
    private $vars = [];
    
    public function __construct($templateDir) {
        $this->templateDir = $templateDir;
    }
    
    public function render($template, $vars = []) {
        $this->vars = $vars;
        $content = $this->loadTemplate($template);
        $content = $this->processIncludes($content);
        $content = $this->processVariables($content);
        $content = $this->processBlocks($content);
        return $content;
    }
    
    private function loadTemplate($template) {
        $file = $this->templateDir . '/' . $template;
        if (!file_exists($file)) {
            throw new Exception("Template not found: $template");
        }
        return file_get_contents($file);
    }
    
    private function processIncludes($content) {
        return preg_replace_callback(
            '/\{\%\s*include\s+[\'"]([^\'"]+)[\'"]\s*(?:with\s+\{[^}]+\})?\s*\%\}/',
            function($matches) {
                return $this->loadTemplate($matches[1]);
            },
            $content
        );
    }
    
    private function processVariables($content) {
        foreach ($this->vars as $key => $value) {
            $content = str_replace("{{ $key }}", htmlspecialchars($value), $content);
        }
        return $content;
    }
    
    private function processBlocks($content) {
        // Remove Twig syntax for now (blocks, extends, etc.)
        $content = preg_replace('/\{\%\s*extends\s+[^\%]+\%\}/', '', $content);
        $content = preg_replace('/\{\%\s*block\s+\w+\s*\%\}/', '', $content);
        $content = preg_replace('/\{\%\s*endblock\s*\%\}/', '', $content);
        return $content;
    }
}

// Check if Twig is available
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
    
    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;
    
    $loader = new FilesystemLoader(__DIR__ . '/../templates');
    $twig = new Environment($loader, [
        'cache' => false,
        'debug' => true,
    ]);
    
    $useTwig = true;
} else {
    // Fallback to simple template system
    $twig = new SimpleTemplate(__DIR__ . '/../templates');
    $useTwig = false;
}

// Simple routing
$page = $_GET['page'] ?? 'landing';

$routes = [
    'landing' => 'landing.html.twig',
    'auth' => 'auth.html.twig',
    'dashboard' => 'dashboard.html.twig',
    'tickets' => 'tickets.html.twig',
];

if (!isset($routes[$page])) {
    $page = 'landing';
}

// Render template
echo $twig->render($routes[$page], ['page' => $page]);
