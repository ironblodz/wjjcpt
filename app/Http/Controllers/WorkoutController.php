<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $photos = Photo::with('category')->get();

        return view('layouts.workout', compact('categories', 'photos'));
    }
}
