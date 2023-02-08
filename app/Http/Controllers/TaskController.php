<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'DESC')->get();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        Task::insert([
            'list' => $request->list,
            'mark' => false
        ]);

        return back();
    }
    public function edit($id)
    {
        $task = Task::where('id', $id)->first();

        return view('tasks.edit', ['task' => $task]);
    }
    public function update(Request $request, $id)
    {
        $task =  Task::where('id', $id)->update(['list' => $request->list]);
        return redirect('tasks');
    }
    public function destroy(Request $request, $id)
    {
        Task::where('id', $id)->delete();

        return back();
    }
}
