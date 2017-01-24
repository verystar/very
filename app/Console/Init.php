<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 13/01/2017 9:57 AM
 */
namespace App\Console;

use Very\Console\Command;
use Very\Database\Connection;

class Init extends Command
{

    public function handle()
    {
        $dbs    = ['default'];
        $config = [];

        foreach ($dbs as $use_db) {
            $db     = Connection::getInstance($use_db);
            $tables = $db->getOneAll("show tables");

            foreach ($tables as $table) {
                $cols                    = $db->getAll("desc " . $table);
                $config[$use_db][$table] = array_column($cols, 'field');
            }
        }

        if (count($config) > 0) {
            file_put_contents(app('path.config') . 'field.php', "<?php\r\nreturn " . var_export($config, true) . ";");
        }
        p($config);
    }
}