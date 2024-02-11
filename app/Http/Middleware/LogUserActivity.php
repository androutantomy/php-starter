<?php

namespace App\Http\Middleware;

use App\Models\UserActivity;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Log user activity
        $user = Auth::user();

        UserActivity::create([
            'id_user' => $user ? $user->id : "1",
            'deskripsi' => $request->method() . ' - ' . $request->path(),
            'status' => 'baru',
            'menu_id' => $request->path(),
            'create_by' => '0',
            'delete_by' => '0',
        ]);

        return $next($request);
    }
}
