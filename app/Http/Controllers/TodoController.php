<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;

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
        $this->validate($request, Todo::$rules);
        $todo = $request->all();
        unset($todo['_token']);
        Todo::find($request->content)->update();
        return redirect ('/');
    }

    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
