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
     * @param UserModel $userModel 依赖注入
     */
    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    private function fooAction()
    {
        //如果model申明了table和primaryKey属性,则可以使用便捷的三个方法来操作user表
        $id = $this->userModel->insert([
            'user_name' => 'test',
            'password'  => '111'
        ]);

        $this->userModel->update([
            'user_name' => 'test2',
            'user_id'  => $id
        ]);

        p($this->userModel->get($id));

        $this->userModel->delete($id);
    }
}