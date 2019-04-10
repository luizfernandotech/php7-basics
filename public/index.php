<?php
declare(strict_types=1);

require __DIR__. '/../vendor/autoload.php';

use App\Kernel;

print_r("Annotations\n\n");

$kernel = new Kernel();
$kernel->boot();

$container = $kernel->getContainer();


$indexController = $container->getService('App\\Controller\\IndexController')->index();
$postController = $container->getService('App\\Controller\\PostController')->index();

var_dump($container->getServices());
var_dump($indexController);
var_dump($postController);