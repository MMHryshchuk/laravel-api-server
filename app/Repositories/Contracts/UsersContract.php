<?php
/**
 * Created by PhpStorm.
 * User: mmhryshchuk
 * Date: 07.03.18
 * Time: 16:02
 */

namespace App\Repositories\Contracts;


use Illuminate\Http\Request;

interface UsersContract
{
    public function getUsers();

    public function getUser(Request $request);

    public function store(Request $request);

    public function update(Request $request, $id);

    public function delete($id);

}