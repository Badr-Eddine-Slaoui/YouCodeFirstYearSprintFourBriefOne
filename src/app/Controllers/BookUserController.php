<?php

namespace App\Controllers;

use App\Models\Book;
use App\Models\BookUser;
use DateInterval;
use DateTime;
use Foundations\Controllers\Controller;
use Foundations\Helpers\Session;

class BookUserController extends Controller {
    public function borrow(Book $book) {
        $borrowDate = new DateTime();
        $dueDate = (new DateTime())->modify('+7 days'); 
        $result = BookUser::create([
            "bookId"=> $book->id,
            "readerId"=> auth()->user()->id,
            "borrowDate"=> $borrowDate->format("Y-m-d H:i:s"),
            "due_date"=> $dueDate->format("Y-m-d H:i:s")
        ]);

        if ($result) {
            $result = $book->update(["status" => "borrowed"]);
            Session::flash("success", "Book borrowed successfully");
            return redirect("books");
        } else {
            Session::flash("error", "Something went wrong");
            return redirect("books");
        }
    }

    public function return(BookUser $borrow) {
        $returnDate = new DateTime();
        $result = $borrow->update(["is_returned" => true, "returnDate" => $returnDate->format("Y-m-d H:i:s")]);
        if ($result) {
            Book::update(["status" => "available"], ["id" => $borrow->bookId]);
            Session::flash("success", "Book returned successfully");
            return redirect("myBorrows", ["user" => auth()->user()->id]);
        } else {
            Session::flash("error", "Something went wrong");
            return redirect("myBorrows", ["user" => auth()->user()->id]);
        }
    }
}