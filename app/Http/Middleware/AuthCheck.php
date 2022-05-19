<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
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

        //if user is not logged in, but go to the register page
        if(!session()->has('LoggedUser')  && $request->path() == 'author_info' ){
//            echo json_encode($request);
            return redirect('/login')->with('fail','You must be logged in');
        }


	    //if user already log in , and still try to access login and register page
	    if(session()->has('LoggedUser') && ($request->path() == 'login' || $request->path() == 'register') ){
		    return redirect('index');
	    }
	    

        //prevent after logout, use browser to click on previous page
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate' )
	                            ->header('Pragma', 'no-cache')
	                            ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
