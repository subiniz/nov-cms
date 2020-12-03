<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BookRequest;

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

    public function store(BookRequest $request) {
        // $validator = Validator::make($request->all(),  [
        //     'title' => 'required',
        //     'description' => 'required',
        //     'author' => 'required',
        //     'published_date' => 'required',
        //     'availability' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return redirect('books/create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        $this->model->create($request->all()); //Saves the data in Database
        return redirect('/books')->withErrors(['alert-success' => 'Data successfully created.']);
    }

    public function edit($id) {
        $data['books'] = $this->model->findOrFail($id); // SELECT * FROM books WHERE id=1;
        return view('books.edit', $data);
    }

    public function update(BookRequest $request, $id) {
        $data = [
            "title" => $request->title,
            "description" => $request->description,
            "author" => $request->author,
            "edition" => $request->edition,
            "published_date" => $request->published_date,
            "availability" => $request->availability
        ];
        $this->model->where('id', $id)->update($data);
        return redirect('/books')->withErrors(['alert-success' => 'Data successfully updated.']);
    }

    public function destroy($id) {
        $this->model->where('id', $id)->delete(); // DELETE FROM books where id = 1
        return redirect('/books')->withErrors(['alert-success' => 'Data successfully deleted.']);
    }
}
