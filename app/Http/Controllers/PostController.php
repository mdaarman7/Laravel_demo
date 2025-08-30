<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
    }
    public function store()
    {
        //(Form handling)
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