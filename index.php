
<?php
require 'config/Autoloader.php';
\Blog\config\Autoloader::register();
/* ON récupère l'URI ( tout ce qui est après le NDD ) et on sépare en 2 les parramètres et le début de l'URI*/
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case "/": 
        $index = new \Blog\controllers\IndexController();
        $index->home();
        break;
    case "/contact":
        $index = new \Blog\controllers\IndexController();
        $index->contact();
        break;
    case "/blog/index":
        $blogController = new \Blog\controllers\ArticleController();
        $blogController->index();
        break;
    case "/login":
        $authController = new \Blog\controllers\AuthController();
        $authController->login();
        break;
    case "/register":
        $authController = new \Blog\controllers\AuthController();
        $authController->register();
        break;
}
?>

