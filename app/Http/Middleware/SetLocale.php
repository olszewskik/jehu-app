<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (Auth::check()) {
            $locale = auth()->user()->language;
        } else {
            $locale = Session::get('locale', Config::get('app.locale'));
        }

        // if (Session::has('locale')) {
        //     $locale = Session::get('locale', Config::get('app.locale'));
        // } else {
        //     $locale = auth()->user()->language;
        // }

        App::setlocale($locale);

        return $next($request);
    }
}
