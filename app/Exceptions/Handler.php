<?php

namespace App\Exceptions;

use Very\Http\Exception\HttpResponseException;

class Handler
{
    /**
     * Render an exception into an HTTP response.
     *
     * @param HttpResponseException $e
     *
     * @return bool
     */
    public function render(HttpResponseException $e)
    {
        if (!is_object($e)) {
            response()->setStatusCode(403);
            echo 'not found.';

            return false;
        }

        /* error occurs */
        switch ($e->getCode()) {
            case HttpResponseException::ERR_NOTFOUND_CONTROLLER:
            case HttpResponseException::ERR_NOTFOUND_ACTION:
            case HttpResponseException::ERR_NOTFOUND_VIEW:
                response()->setStatusCode(404);
                echo $e->getMessage();
                break;
            default :
                echo 0, ':', $e->getMessage();
                break;
        }
    }
}
