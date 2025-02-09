<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Menu;

class Template
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $menuItems = Menu::whereNull('parent_id')
            ->with('children')
            ->orderBy('order')
            ->get()
            ->toArray();
    
        view()->share('menuItems', $menuItems);
    
        return $next($request);
    }
    
}
