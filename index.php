<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/inicio", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/contato", "Web:contact");
$route->get("/localizacao", "Web:location");
$route->get("/produtos", "Web:product");
$route->get("/carrinho","Web:cart");
$route->get("/entrar","Web:login");
$route->get("/faqs","Web:faq");
$route->get("/adm","Web:admin");
$route->get("/perfil","Web:profile");
$route->get("/ops/{errcode}", "Web:error");

$route->group("/app");

$route->get("/", "App:home");
$route->get("/mensagens", "App:messages");
//$route->get("/carrinho", "App:cart");

$route->group(null);

$route->group("/adm");

$route->get("/", "Admin:home");
$route->get("/geral", "Admin:overview");
$route->get("/relatorio", "Admin:report");
$route->get("/usuario", "Admin:user");
$route->get("/perfil","Admin:profile");
$route->get("/produtos", "Admin:products");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();