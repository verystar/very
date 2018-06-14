<?php
namespace App\Models;

/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 15/1/26 下午12:39
 */

use Very\Model;

class BaseModel extends Model
{
    public function field($table)
    {
        return config('field.' . $this->use_db . '.' . $table, []);
    }
}