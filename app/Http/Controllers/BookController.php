<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function __construct(Book $book) {
        $this->model = $book;
    }

    public function index() {
        $data['books'] = $this->model->all(); //select * from books
        return view('books.index', $data);
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),  [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'published_date' => 'required',
            'availability' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('books/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        // dd($request->all());
        $this->model->create($request->all()); //Saves the data in Database
        return redirect('/books')->withErrors(['alert-success' => 'Data successfully created.']);
    }

    public function edit($id) {
        $data['books'] = $this->model->findOrFail($id); // SELECT * FROM books WHERE id=1;
        return view('books.edit', $data);
    }

    public function update() {

    }
}
