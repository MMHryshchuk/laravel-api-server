<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Repositories\Contracts\UsersContract;

class UserController extends Controller
{

    protected $users;

    public function __construct(UsersContract $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        return ['users'=> $this->users->getUsers()];
    }

    public function store(Request $request)
    {
        return $this->users->store($request);
    }

    public function show(Request $request)
    {
        return $this->users->getUser($request);

    }

    public function update(Request $request, $id)
    {
        return $this->users->update($request,$id);
    }

    public function destroy(Request $request)
    {

        return $this->users->delete($request->id);
    }
}
