<?php

namespace App\Exceptions;

use Exception;
use Very\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    public function report(Exception $e)
    {
        parent::report($e);
        mstat()->set(1, 'BUG错误', "PHP错误", "file:{$e->getFile()} | line:{$e->getLine()}", "Error Info:<br/>\n" . $e->getMessage(), 100);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param Exception $e
     */
    public function render(Exception $e)
    {
        parent::render($e);
    }

    /**
     * PHP shutdown run
     */
    public function shutdown()
    {
        if ($_SERVER['REQUEST_TIME'] || $_SERVER['REQUEST_TIME_FLOAT']) {
            $start_time = $_SERVER['REQUEST_TIME_FLOAT'] ? $_SERVER['REQUEST_TIME_FLOAT'] : $_SERVER['REQUEST_TIME'];
            $uri        = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            mstat()->set(1, '程序执行效率', mstat()->diffTime($start_time), $uri);
        }
    }
}
