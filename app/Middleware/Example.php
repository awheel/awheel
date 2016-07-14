<?php

namespace App\Middleware;

use Closure;
use light\Http\Request;

/**
 * Example middleware
 *
 * @package App\Middleware
 */
class Example
{
    /**
     * 示例中间件
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // todo before

        $response = $next($request);

        // todo after

        return $response;
    }
}
