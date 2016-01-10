<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use Session;
use App\Contacts;
use DB;


class TasksController extends Controller
{
    public function index()
	{

	    // $tasks = Contacts::all(); // using Model
		$tasks = DB::connection('mysql')->select('select * from contacts'); // Using raw query
	    // using spesific db coonections
	    return view('crud.tasks.index')->withTasks($tasks);
	}

	public function create()
	{
    	return view('crud.tasks.create');
	}

	public function store(Request $request)
	{
	    // dd($request->all()); 
	    $this->validate($request, [
	    	'name'		=>'required',
        	'username'	=>'required',
        	'email'		=>'required',
        	'address'	=>'required',
        	'likes'		=>'required',
        	'gender'		=>'required'

		]);

	    $input = $request->all();

    	Contacts::create($input);
    	Session::flash('flash_message', 'Task successfully added!');
    	return redirect()->back();
	}

	public function show($id)
	{
	    $task = Contacts::findOrFail($id);

    	return view('crud.tasks.show')->withTask($task);
	}

	public function edit($id)
	{
		$task = Contacts::findOrFail($id);

    	return view('crud.tasks.edit')->withTask($task);
	}

	public function update($id, Request $request)
	{
	    $task = Contacts::findOrFail($id);

	    $this->validate($request, [
	        'name'		=>'required',
        	'username'	=>'required',
        	'email'		=>'required',
        	'address'	=>'required',
        	'likes'		=>'required',
        	'gender'		=>'required'
	    ]);

	    $input = $request->all();

	    $task->fill($input)->save();

	    Session::flash('flash_message', 'Task successfully added!');

	    return redirect()->back();
	}

	public function destroy($id)
	{
	    $task = Contacts::findOrFail($id);

	    $task->delete();

	    Session::flash('flash_message', 'Task successfully deleted!');

	    return redirect()->route('crud.tasks.index');
	}
}
