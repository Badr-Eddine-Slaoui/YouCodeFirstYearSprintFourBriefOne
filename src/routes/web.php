<?php

$router->get(["/", "UserController@index"])->name("home");
$router->get(["/login", "AuthController@login"])->name("login")->middleware(["guest"]);
$router->get(["/register", "AuthController@register"])->name("register")->middleware(["guest"]);
$router->post(["/login", "AuthController@loginSubmit"])->name("loginSubmit")->middleware(["guest"]);
$router->post(["/register", "AuthController@registerSubmit"])->name("registerSubmit")->middleware(["guest"]);
$router->post(["/logout", "AuthController@logout"])->name("logout")->middleware(["auth"]);
$router->get(["/profile/{user}", "UserController@profile"])->name("profile")->middleware(["auth"]);
$router->get(["/my-borrows/{user}", "UserController@myBorrows"])->name("myBorrows")->middleware(["auth"]);
$router->get(["/books", "BookController@index"])->name("books");
$router->get(["/book/{book}", "BookController@show"])->name("book");
$router->post(["/book/borrow/{book}", "BookUserController@borrow"])->name("book.borrow")->middleware(["auth"]);
$router->post(["/book/borrow/return/{borrow}", "BookUserController@return"])->name("book.return")->middleware(["auth"]);
$router->get(["/admin", "AdminController@index"])->name("admin.dashboard")->middleware(["auth"]);
$router->get(["/admin/books", "AdminController@books"])->name("admin.books")->middleware(["auth"]);
$router->get(["/admin/readers", "AdminController@readers"])->name("admin.readers")->middleware(["auth"]);
$router->get(["/admin/borrows", "AdminController@borrows"])->name("admin.borrows")->middleware(["auth"]);
$router->get(["/admin/add-book", "BookController@create"])->name("admin.addBook")->middleware(["auth"]);
$router->post(["/admin/add-book", "BookController@store"])->name("admin.book.store")->middleware(["auth"]);
$router->get(["/admin/update-book/{book}", "BookController@edit"])->name("admin.updateBook")->middleware(["auth"]);
$router->post(["/admin/update-book/{book}", "BookController@update"])->name("admin.book.update")->middleware(["auth"]);
$router->post(["/admin/delete-book/{book}", "BookController@destroy"])->name("admin.book.destroy")->middleware(["auth"]);
