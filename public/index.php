<?php
require("../vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

use App\Route;

$route = new Route;



//echo $route->getUrl(); //Não funciona pois ele n usa echo, entao temos q usa o print para mostrar vetores

//print_r( $route->getUrl()); //Sem formatação

//dd($route->getUrl()); // Com formatação do debug

//dd($route->getRoutes()); // Com formatação do debug com informação do route


?>
