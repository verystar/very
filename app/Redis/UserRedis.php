<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 15/4/9 下午1:31
 */

namespace App\Redis;

class UserRedis extends BaseRedis {

    private $filed;

    public function __construct() {
        //开启监控
        $this->redis()->setStat(true);
        $this->filed = $this->field('users');
    }

    public function isExists($user_id) {
        return $this->redis()->exists('user:' . $user_id);
    }

    public function delUser($user_id) {
        return $this->redis()->del('user:' . $user_id);
    }

    public function getUser($user_id) {

        $info = $this->redis()->hGetAll('user:' . $user_id);
        //为了节约内存，这里由于存储内存的key并不完整的，因此需要重新组合完整的字段返回
        if ($info) {
            $info = restore_empty($info, $this->filed);
        }
        return $info;
    }

    public function setUser($user_id, $info) {
        /**
         * 经过测试，1000个hash结构，去除空字段可以节约50%的内存，因此这里对数组进行过滤，仅仅去除空的key(不包含0)
         * 6379
         * used_memory_human:5.29M
         * 6381
         * used_memory_human:2.51M
         */
        $info = filter_empty($info);

        //去除不需要缓存的字段
        unset($info['note']);

        $this->redis()->hMset('user:' . $user_id, $info);
        $this->redis()->expire('user:' . $user_id, self::CACHE_WEEK_TTL);
        return true;
    }

}
