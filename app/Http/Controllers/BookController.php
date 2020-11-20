<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function __construct(Book $book) {
        $this->model = $book;
    }

    public function index() {
        $data['books'] = $this->model->all(); //select * from books
        return view('books.index', $data);
    }
}
