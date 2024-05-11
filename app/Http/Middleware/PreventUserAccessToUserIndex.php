<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventUserAccessToUserIndex
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
        // تحقق من صلاحيات المستخدم
        // إذا لم يكن مخولًا، قم بإعادة توجيهه إلى الصفحة الرئيسية أو أي صفحة أخرى
        if (!auth()->user()->isAdmin()) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }

        return $next($request);
    }
}