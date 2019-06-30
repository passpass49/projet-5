
<?php
require 'vendor/autoload.php';
use Controllers\IndexController;
use Controllers\AuthController;
use Controllers\ArticleController;

/* ON récupère l'URI ( tout ce qui est après le NDD ) et on sépare en 2 les parramètres et le début de l'URI*/
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case "/": 
        $index = new IndexController();
        $index->home();
        break;
    case "/contact":
        $index = new IndexController();
        $index->contact();
        break;
    case "/blog/index":
        $blogController = new ArticleController();
        $blogController->index();
        break;
    case "/login":
        $authController = new AuthController();
        $authController->login();
        break;
    case "/register":
        $authController = new AuthController();
        $authController->register();
        break;
}
?>

