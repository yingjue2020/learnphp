<?php
use Coral\Learnphp\Controllers\UserController;

require __DIR__ . '/vendor/autoload.php';

$controller = new UserController();
$controller->showUser(); // 输出 "John Doe"