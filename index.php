<?php
require 'src/Models/User.php';
require 'src/Controllers/UserController.php';

use Controllers\UserController;

$controller = new UserController();
$controller->showUser(); // 输出 "John Doe"