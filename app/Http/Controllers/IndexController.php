<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\messages;


class IndexController extends Controller
{
    public function index()
    {
        // $files = Storage::disk('local')->allFiles('public');
        return view('welcome');
    }
    public function message(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'message' => 'required|string|max:255'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());
        }
        $arr = $request->all();
        messages::create(['name' => $arr['name'], 'email' => $arr['email'], 'message' => $arr['message']]);
        return redirect()->back()->with('success', 'message has been succesfully recieved. we wil try to get back to you as soon as possible.');
    }
    
    public function dice()
    {
        return view('dice');
    }
}