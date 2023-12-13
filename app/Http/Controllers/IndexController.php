<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class IndexController extends Controller
{
    public function index()
    {
        // $files = Storage::disk('local')->allFiles('public');
        return view('welcome');
    }
    
    public function dice()
    {
        return view('dice');
    }
}