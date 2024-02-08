<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller

{
    public function index(){
        return Inertia::render("Posts.Index");
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $post = new Post();
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
        $post->save();

    
        return Inertia::render("Posts.Index");
    }
}
