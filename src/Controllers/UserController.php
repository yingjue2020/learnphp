<?php
namespace Controllers;

use Models\User;

class UserController {
    public function showUser() {
        $user = new User();
        echo $user->getName();
    }
}