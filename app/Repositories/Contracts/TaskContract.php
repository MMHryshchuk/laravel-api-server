<?php
/**
 * Created by PhpStorm.
 * User: mmhryshchuk
 * Date: 07.03.18
 * Time: 12:33
 */

namespace App\Repositories\Contracts;



use Illuminate\Http\Request;

interface TaskContract
{

    public function getTasks(Request $request);

    public function store(Request $request);

    public function delete(Request $request);

}