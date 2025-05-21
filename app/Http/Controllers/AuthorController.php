<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    // Menampilkan semua data author
    public function index()
    {
        $authors = Author::all();

    }

    // Menyimpan data author baru
    public function store(Request $request)
    {
        // 1. Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        // 2. Jika validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. Simpan author
        $author = Author::create([
            'name' => $request->name
        ]);

        // 4. Respon sukses
        return response()->json([
            'success' => true,
            'message' => 'Author created successfully!',
            'data' => $author
        ], 201);
    }
}
