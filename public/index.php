<?php

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = trim($requestUri, "/");

$routes = [
  "" => "views/wp-index.php",
  "movies" => "views/wp-movies-list.php",
  "how-to-download" => "views/wp-download-guide.php"
];

if (array_key_exists($route, $routes)) {
  require_once __DIR__ . '/' . $routes[$route];
} else {
  http_response_code(404);
  $pageTitle = "404 - Page Not Found";

  ob_start();
  echo "<div class='text-center py-20'><h1 class='text-4xl font-bold'>404</h1><p>Page Not Found</p></div>";
  $content = ob_get_clean();
  require_once __DIR__ . "/components/wp-layout.php";
}
