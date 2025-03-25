<?php

namespace App\Http\Controllers;

use App\Models\Post; // Make sure to import the Post model
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::with('user') // Eager load the user relationship
                    ->latest()      // Order by newest first
                    ->paginate(10); // 10 posts per page
        
        return view('dashboard', compact('posts'));
    }
}