<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use Request;
use Illuminate\Http\Request; 
use App\Models\Todo;

class TodoController extends Controller
{
    //
    public function index(){
        $todo = Todo::all();
        return view('todos.index',compact('todo'));
    }

    public function store(Request $request){
        Todo::create(request()->all());
        // dd(request()->all());
        return redirect(route('index'))->with('message', 'Todo Created Successfully');
    }

    public function edit($id){
        $todo=Todo::find($id);
        return view('todos.edit',compact('todo'));
    }

    public function update(Request $request,$id){
        $todo=Todo::find($id);
        
        $todo->title = $request->title;
        $todo->description = $request->description;
        // dd($todo->title);
        $todo->save();
        return redirect(route('index'))->with('message', 'Todo Created Successfully');
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        // dd(request()->all());
        return redirect(route('index'))->with('message', 'Todo Created Successfully');
    }

    public function completed($id)
    {
        $todo = todo::find($id);
        if($todo->completed == '0'){
            $todo->completed = '1';
            $todo->save();
            // dd($todo->completed);
        }else{
            $todo->completed = '0';
            $todo->save();
        }
        return redirect()->back();
    }

}
