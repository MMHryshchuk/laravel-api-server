<?php
/**
 * Created by PhpStorm.
 * User: mmhryshchuk
 * Date: 10.03.18
 * Time: 18:00
 */

namespace App\Traits;


use App\User;
use http\Env\Request;

trait UserPermissions
{

    public function havePermissionsToDelete($id, $userId)
    {
        if  ($userId === null || $id === null){
            return  false;
        }
        $user = User::find($userId);
        $type = $user->type;
        return ($type === '3');
    }

    public function havePermissionsToEdit($id, $userId)
    {
        if  ($userId === null || $id === null){
            return  false;
        }
        $user = User::find($userId);
        $type = $user->type;
        return ($type === '2' || $type === '3');
    }

    public function haveParams($request)
    {
        $id = $request->id;
        $userId = $request->userId;
        return ($id ==='' && $userId === '');
    }
}