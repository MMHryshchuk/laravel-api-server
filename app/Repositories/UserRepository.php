<?php
/**
 * Created by PhpStorm.
 * User: mmhryshchuk
 * Date: 27.02.18
 * Time: 15:55
 */

namespace App\Repositories;


use App\Repositories\Contracts\UsersContract;
use App\User;
use Illuminate\Http\Request;
use App\Facades\Test;

class UserRepository implements UsersContract
{

    public function getUsers()
    {
        return User::all();
    }

    public function getUser(Request $request)
    {
        $user = User::find($request->id);
        $id = $user->id;
        $name = $user->name;
        $email = $user->email;
        $tasks = $user->tasks()->get();
        $data=['id'=>$id,
            'name'=>$name,
            'email'=>$email,
            'tasks'=>$tasks,
        ];

        return $data;
    }

    public function store(Request $request)
    {

        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function delete( $id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(null, 204);
    }

}