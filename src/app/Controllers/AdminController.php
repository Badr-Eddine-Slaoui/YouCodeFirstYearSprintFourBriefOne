<?php

namespace App\Controllers;

use App\Models\Book;
use App\Models\BookUser;
use App\Models\User;
use Foundations\Controllers\Controller;
use Foundations\Request\Request;

class AdminController extends Controller {
    public function index() {
        return view("admin.dashboard");
    }

    public function readers() {
        $users = User::all();
        return view("admin.readers", compact("users"));
    }

    public function books(Request $request) {
        $books = Book::all();
        return view("admin.books", compact("books"));
    }

    public function borrows() {
        $borrows = BookUser::with("user")->with("book")->get();
        return view("admin.borrows", compact("borrows"));
    }

}