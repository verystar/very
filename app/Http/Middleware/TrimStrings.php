<?php

namespace App\Http\Middleware;

class TrimStrings
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];

    public function handle()
    {
        foreach ($_GET as $k => &$v) {
            if (!in_array($k, $this->except)) {
                $v = trim($v);
            }
        }

        foreach ($_POST as $k => &$v) {
            if (!in_array($k, $this->except)) {
                $v = trim($v);
            }
        }
    }
}
