<?php

namespace App\Http\Middleware;

use App\Task;
use Closure;
use Sentinel;
use Request;
class SentinelAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $prefix = Request::route()->getPrefix();
        if(!Sentinel::check())
            return redirect('admin/signin')->with('info', 'You must be logged in!');
        elseif(!Sentinel::inRole('admin'))
             return redirect()->route('401');

        $tasks_count = Task::where('user_id', Sentinel::getUser()->id)->count();
        $request->attributes->add(['tasks_count' => $tasks_count]);

        return $next($request);
    }
}
