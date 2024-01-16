<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\User;

class UserController extends Controller {
  public function index() {
    $users = [
      new User("Monkey D. Luffy", "pirate_king@example.com"),
      new User("Roronoa Zoro", "best_swordsman@example.com")
    ];

    $this->render("user/index", ["users" => $users]);
  }
}
