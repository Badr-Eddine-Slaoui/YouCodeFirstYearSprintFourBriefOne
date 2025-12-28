<?php

namespace App\Controllers;

use App\Models\BookUser;
use App\Models\User;
use Foundations\Controllers\Controller;
use Foundations\Request\Request;

class UserController extends Controller {
    public function index() {
        return view("index");
    }

    public function profile(User $user) {
        return view("profile", compact("user"));
    }

    public function myBorrows(User $user) {
        $borrows = BookUser::with("user")->with("book")->where("readerId", "=", $user->id)->get();
        return view("borrows", compact("borrows"));
    }
}