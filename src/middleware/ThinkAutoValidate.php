<?php
namespace mbing\middleware;


use think\facade\App;
use think\facade\Request;
class ThinkAutoValidate
{
    public function handle($request, \Closure $next)
    {
        $class = App::parseClass('validate',ucfirst(Request::controller()));
        $action = Request::action();
        $validator = new $class();
        if (class_exists($class) && $validator->hasScene($action) && !$validator->check(Request::param())) {
            $result['status'] = strstr($validator->getError(),'token')?300:404;
            $result['message'] = $validator->getError();
            return json($result)->options(['json_encode_param' => JSON_UNESCAPED_SLASHES]);
        }
        return $next($request);
    }
}