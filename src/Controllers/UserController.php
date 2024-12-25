<?php
namespace Coral\Learnphp\Controllers;

use Coral\Learnphp\Models\User;

class UserController {
    public function showUser() {
        $user = new User();
        echo $user->getName();
    }
}