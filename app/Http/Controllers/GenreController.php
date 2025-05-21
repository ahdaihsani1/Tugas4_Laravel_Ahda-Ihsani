<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    // Menampilkan semua genre
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            'success' => true,
            'message' => 'Get all genres',
            'data' => $genres
        ], 200);
    }

    // Menyimpan data genre baru
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // Simpan genre
        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        // Respon sukses
        return response()->json([
            'success' => true,
            'message' => 'Genre created successfully!',
            'data' => $genre
        ], 201);
    }
}