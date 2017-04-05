<?php

namespace app\Middleware;

use Closure;
use awheel\Http\Request;

/**
 * 示例中间件
 *
 * @package app\Middleware
 */
class Example
{
    public function handle(Request $request, Closure $next)
    {
        // todo before

        $response = $next($request);

        // todo after

        return $response;
    }
}
