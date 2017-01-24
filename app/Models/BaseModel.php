<?php
namespace App\Models;

/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 15/1/26 下午12:39
 */

use Very\Model;
use Very\Cache\SSDB;

class BaseModel extends Model
{
    public $use_ssdb = 'default';

    //缓存时间
    const CACHE_WEEK_TTL   = 604800;//7天
    const CACHE_DAY_TTL    = 86400;//1天
    const CACHE_HOUR_TTL   = 3600;//1小时
    const CACHE_MIN_TTL    = 60;//1分钟
    const ACCESS_TOKEN_TTL = 180;//180秒

    /**
     * @param string $db
     *
     * @return SSDB | Object
     */
    public function ssdb($db = '')
    {
        $db = $db ? $db : $this->use_ssdb;
        return SSDB::getInstance($db);
    }

    public function field($table)
    {
        return config('field.' . $this->use_db . '.' . $table, []);
    }
}