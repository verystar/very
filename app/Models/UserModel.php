<?php

namespace App\Models;

use App\Redis\UserRedis;
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 15/2/13 下午12:13
 */
class UserModel extends BaseModel
{

    private $userredis;

    public function __construct(UserRedis $userredis)
    {
        $this->userredis = $userredis;
    }

    public function getUser($user_id)
    {
        $info = $this->userredis->getUser($user_id);
        if (!isset($info['user_id'])) {
            $sql  = "select * from users where user_id = :user_id limit 1";
            $info = $this->db()->getRow($sql, array('user_id' => $user_id));
            if ($info) {
                $this->userredis->setUser($user_id, $info);
            }
        }

        return $info;
    }
}
