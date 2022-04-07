<?php

// require __DIR__.'/controllers/recipe-controller.php';

require __DIR__ . '/controllers/RecipeController.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$recipeController = new RecipeController();
if ('/' === $urlPath) {
    $recipeController->browse();
} elseif ('/show' === $urlPath && isset($_GET['id'])) {
    $recipeController->show($_GET["id"]);
} elseif ('/add' === $urlPath) {
    $recipeController->add();
} elseif ('/delete' === $urlPath && isset($_GET['id']) ) {
    $recipeController->delete($_GET["id"]);
} elseif ('/update' === $urlPath && isset($_GET['id']) ) {
    $recipeController->update($_GET["id"]);
}
 else {
    header('HTTP/1.1 404 Not Found');
}
