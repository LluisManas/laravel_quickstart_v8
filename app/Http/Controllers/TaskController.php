<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Create new controller instance
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a list of all user's task
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        return view('task.index');
    }

    /**
     * create a task
     * 
     * @param Request $request
     * @return $response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:225',
        ]);

        $request->user()->task()->create([
            'name' => $request->name,
        ]);
        
        return redirect('/task');
    }
    
}
