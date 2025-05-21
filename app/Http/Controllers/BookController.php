<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{

    // BookController.php
    public function index()
    {
        $books = Book::with('author')->get(); 
        
    }

    public function store(Request $request) {
        // 1. validator
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'cover_photo' => 'required|image|mimes:jpg,jpeg,png', 
            'genre_id' => 'required|exists:genres,id',
            'author_id' => 'required|exists:authors,id',
        ]);

        // 2. check validator error
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. upload image
        $image = $request->file('cover_photo');
        $image->store('books', 'public');

        // 4. insert data
        $book = Book::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'price'=> $request->price,
            'stock'=> $request->stock,
            'cover_photo'=> $request->cover_photo,
            'genre_id'=> $request->genre_id,
            'author_id'=> $request->author_id,
        ]);

        // 5. response
        return response()->json([
            "success" => true,
            "message" => "Resource added successfully!",
            "data" => $book
        ], 201);
    }
}
