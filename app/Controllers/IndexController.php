<?php
namespace App\Controllers;

/**
 * Created by PhpStorm.
 * Date: 14-6-11
 * Time: 下午10:33
 */
class IndexController
{
    public function indexAction()
    {
        view()->display('index.php', ['name' => 'VeryStar']);
    }
}