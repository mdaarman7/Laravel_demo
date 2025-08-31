<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

// use Illuminate\Support\Facades\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Hello, World!";
    }
    public function create()
    {
        //form to insert data
        return view('index'); // loads resources/views/index.blade.php

    }
    public function store(Request $request)
    {
        // dd(request()->all());
        // Input Validate Gareko
        $request->validate([
            "name"  => "required|string|max:255",
            "email" => "required|email|unique:users,email"
        ]);

        // Store In DataBase
        $user = User::create([
            "name"=> $request->name,
            "email"=> $request->email,
        ]) ;

        return redirect()->route('index.create')->with("success", "User saved successfully!");


    }
    public function show($id)
    {
        //show single data
    }
    public function edit($id)
    {
        //form edit
    }
    public function update($id)
    {
        //update data
    }
    public function destroy($id)
    {
        //delete data
    }

}