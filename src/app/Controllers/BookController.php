<?php

namespace App\Controllers;

use App\Models\Book;
use App\Requests\BookRequest;
use Foundations\Controllers\Controller;
use Foundations\Helpers\Session;
use Foundations\Request\Request;

class BookController extends Controller {
    public function index() {
        $books = Book::all();
        return view("books", compact("books"));
    }

    public function show(Book $book) {
        return view("book", compact("book"));
    }

    public function create() {
        return view("admin.addBook");
    }

    public function store(BookRequest $request) {
        $book = Book::create($request->inputs());
        if( $book ) {
            Session::flash("success", "Book added successfully");
            return redirect("admin.books");
        } else {
            Session::flash("error","Something went wrong");
            return redirect("admin.addBook");
        }
    }

    public function edit(Book $book) {
        return view("admin.updateBook", compact("book"));
    }

    public function update(BookRequest $request, Book $book) {
        $result = $book->update($request->inputs());
        if( $result ) {
            Session::flash("success", "Book updated successfully");
            return redirect("admin.books");
        } else {
            Session::flash("error", "Something went wrong");
            return redirect("admin.updateBook", ["book"=> $book->id]);
        }
    }

    public function destroy(Book $book) {
        $result = $book->delete();
        if( $result ) {
            Session::flash("success", "Book deleted successfully");
            return redirect("admin.books");
        } else {
            Session::flash("error", "Something went wrong");
            return redirect("admin.books");
        }
    }
}