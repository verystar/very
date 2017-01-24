<?php
namespace App\Controllers\Test;

use App\Models\UserModel;

/**
 * Created by PhpStorm.
 * Date: 14-6-11
 * Time: 下午10:33
 */
class FooController
{

    /**
     * FooController constructor.
     *
     * @param UserModel $userModel  依赖注入
     */
    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    private function fooAction()
    {
        echo 'foo action';
    }
}