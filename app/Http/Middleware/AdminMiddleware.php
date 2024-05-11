<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        // تحقق من المسار للتأكد مما إذا كان المستخدم يحاول الوصول إلى صفحة admin أو index في مجلد users
        if($request->is('admin') || $request->is('users/index')) {
            // تحقق من دور المستخدم
            if(auth()->user()->role !== '1') {
                // إذا لم يكن المستخدم مشرفًا، قم بإعادة توجيهه إلى الصفحة الرئيسية أو أي صفحة أخرى
                return redirect('/')->with('error', 'You do not have access to this page.');
            }
        }
    
        return $next($request);
    }
}