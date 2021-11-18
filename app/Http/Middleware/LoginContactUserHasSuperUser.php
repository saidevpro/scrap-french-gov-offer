<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginContactUserHasSuperUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && !$this->isSuperUser($user)) {
            $super_user = User::find($user->parent_id);

            if ($super_user) {
                Auth::login($super_user);
            }
        }

        return $next($request);
    }
    /**
     * @param \App\Models\User
     * @return bool
     */
    private function isSuperUser(User $user)
    {
        return !$user->parent_id;
    }
}
