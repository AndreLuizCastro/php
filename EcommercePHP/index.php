<?php 

require_once("vendor/autoload.php");
use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() 
{
    $page = new page();
	$page ->setTPL("index");

});

$app->run();

 ?>