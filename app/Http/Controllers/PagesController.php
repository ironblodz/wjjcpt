<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showDtn()
    {
        return view('layouts.dtn');
    }

    public function showWJJC()
    {
        return view('layouts.wjjc');
    }

    public function showWjjcGallery()
    {
        return view('layouts.wjjcgallery');
    }

    public function showWJJCPT()
    {
        return view('layouts.wjjcportugal');
    }

    public function showKishido()
    {
        return view('layouts.kishido');
    }

    public function showGallery()
    {
        return view('layouts.gallery');
    }

    public function showFounder()
    {
        return view('layouts.founder');
    }

    public function showEvents()
    {
        return view('layouts.events');
    }

    public function showForm()
    {
        return view('layouts.contact');
    }

    public function showClubs()
    {
        return view('layouts.clubs');
    }

    public function showWorkout()
    {
        return view('layouts.workout');
    }
}
