<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', ['todos' => $todos]);
    }

    public function create(Request $request)
    {
        $todo = new Todo();
        $todo->content = $request->content;
        $todo->save();
        return redirect('/');
    }

    public function update(Request $request)
    {
        return view ('index');
    }

    public function delete(Request $request) {
        $todo = Todo::find($request->id)->delete();
        return redirect('/');
    }
}