<?php

namespace Ayorindecodes\Requestlogger\Middleware;

use Ayorindecodes\Requestlogger\Entity\RequestLogger;
use Closure;

class RequestLoggerMiddleware
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
        $request->start = microtime(true);

        return $next($request);
    }

    public function terminate($request, $response)
    {
        $request->end = microtime(true);

        $this->log($request, $response);
    }

    protected function log($request, $response)
    {
        $log = [];
        $log['url'] = $request->fullUrl();
        $log['method'] = $request->method();
        $log['ip'] = $request->ip();
        $log['agent'] = $request->header('user-agent');
        $log['header_token'] = (isset($request->header()['api-key']) ? $request->header('api-key') : null);
        $log['user_id']= auth()->check() ? auth()->user()->id : null;
        $log['payload_request'] = json_encode([$request->all()], true);
        $log['payload_response'] = $response->getContent();
        $log['duration'] = $request->end - $request->start . ' ' . 'ms';

        RequestLogger::create($log);
    }
}


