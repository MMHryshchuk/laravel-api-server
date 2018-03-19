<?php

namespace App\Http\Middleware;

use App\Traits\UserPermissions;
use Closure;

class EditPermissions
{
    use UQserPermissions;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $state = $this->havePermissionsToEdit($request->id, $request->userId);
        if (!$state) {
            abort(404);

        }

        return $next($request);

    }
}
