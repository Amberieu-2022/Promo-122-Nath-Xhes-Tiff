<?php 
require_once __DIR__ . '/vendor/autoload.php';
require_once  __DIR__ .'/vendor/altorouter/altorouter/AltoRouter.php';


define('ROOT', '/prison');

$router = new AltoRouter();

$router->setBasePath(ROOT);

// Page d'accueil
$router->map('GET', '/', 'ControllerDetenu#listAll', '/');

// Direction les détenus 
$router->map('GET|POST', '/detenus', 'ControllerDetenu#listAllDetenu', 'detenus');

// Direction détenu sélectionner
$router->map('GET', '/detenu/[i:id_detenu]', 'ControllerDetenu#readDetenu', 'detenu');


// Direction les catégories
$router->map('GET', '/categ', 'ControllerDetenu#listCategorie', 'categ'); 

// Directions listes des articles
$router->map('GET', '/articles','ControllerDetenu#listArticles', 'articles');

$router->map('GET', '/cryptographie', 'ControllerDetenu#cryptographie', 'cryptographie' );

$router->map('GET', '/cryptomonnaie', 'ControllerDetenu#cryptomonnaie', 'cryptomonnaie' ); 

$router->map('GET', '/cyberAttack', 'ControllerDetenu#cyberAttack', 'cyberAttack' );

$router->map('GET', '/fonctionPc', 'ControllerDetenu#fonctionPc', 'fonctionPc' );

$router->map('GET', '/googleA', 'ControllerDetenu#googleA', 'googleA' );

$router->map('GET', '/iot', 'ControllerDetenu#iot', 'iot' );

$router->map('GET', '/metaverse', 'ControllerDetenu#metaverse', 'metaverse' );

$router->map('GET', '/noCode', 'ControllerDetenu#noCode', 'noCode' );

$router->map('GET', '/uxDark', 'ControllerDetenu#uxDark', 'uxDark' );

$match = $router->match();

if($match){
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller; 
   
    if(is_callable(array($obj, $action))){
         call_user_func_array(array($obj, $action), array($match['params']));
    }
} 