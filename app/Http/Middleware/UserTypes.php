<?php
/**
 * Created by PhpStorm.
 * User: mmhryshchuk
 * Date: 08.03.18
 * Time: 12:56
 */

namespace App\Http\Middleware;


use App\Traits\UserPermissions;
use Closure;

class UserTypes
{
    use UserPermissions;

    public function handle($request, Closure $next)
    {
            $state = $this->havePermissionsToDelete($request->id, $request->userId);
            if (!$state) {
                abort(404);

            }

        return $next($request);

    }
}