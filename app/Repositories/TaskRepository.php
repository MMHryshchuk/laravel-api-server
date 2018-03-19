<?php
/**
 * Created by PhpStorm.
 * User: mmhryshchuk
 * Date: 01.03.18
 * Time: 17:10
 */

namespace App\Repositories;


use App\Repositories\Contracts\TaskContract;
use App\Task;
use App\User;
use Illuminate\Http\Request;

class TaskRepository implements TaskContract
{

    public function getTasks(Request $request)
    {
        $user = User::find($request->id);
        return $user->tasks()->get();
    }

    public function store(Request $request)
    {

        $user = User::find($request->id);

        $user->tasks()->create([
            'name' => $request->task,
        ]);

        return response()->json(null, 201);
    }

    public function delete(Request $request)
    {
        $f = fopen('logs.txt',"w");
        fwrite($f,var_export($request->ids,true));
        fclose($f);

        foreach ($request -> ids as $id){
            Task::destroy($id);
        }
        return response()->json(null, 201);

    }
}