<?php
namespace App\Http\Controllers;

use Very\Controller;

/**
 * Created by PhpStorm.
 * Date: 14-6-11
 * Time: 下午10:33
 */
class IndexController extends Controller
{
    public function indexAction()
    {
        view()->display('index.php', ['name' => 'VeryStar']);
    }
}