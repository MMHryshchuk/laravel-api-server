<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TaskContract;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    protected $tasks;

    public function __construct(TaskContract $tasks)
    {
        $this->tasks = $tasks;
    }

    public function index(Request $request)
    {
        return ['tasks'=>$this->tasks->getTasks($request)];
    }

    public function store(Request $request)
    {
        return $this->tasks->store($request);
    }


    public function destroy(Request $request)
    {
        return $this->tasks->delete($request);
    }
}
