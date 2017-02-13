<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 13/02/2017 11:29 AM
 */

namespace App\Traits;

use Very\Cache\SSDB;

trait SsdbTrait{
    public $use_ssdb = 'default';

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
}