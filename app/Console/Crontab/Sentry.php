<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 13/01/2017 10:52 AM
 */

namespace App\Console\Crontab;

use Very\Console\Command;

class Sentry extends Command
{

    public function handle()
    {
        $dsn = 'http://test.com';

        $options = array(
            'tags'  => array(
                'type' => 'test',
            ),
            'trace' => false,
        );

        $pattern_content = '^\[(.*)\] log\.([^:]+):\s+(.+)';

        $parrern_level = implode('|', array(
            'debug',
            'info',
            'warning',
            'error',
            'fatal',
        ));

        $client = new \Raven_Client($dsn, $options);

        while (($line = fgets(STDIN)) !== false) {
            if (!preg_match("/{$pattern_content}/", $line, $match)) {
                continue;
            }

            //过滤不需要看到的日志
            //过滤报表重复插入
            if (strpos($line, 'Duplicate') !== false && strpos($line, 'SQL Error') !== false) {
                continue;
            }

            list($line, $timestamp, $level, $message) = $match;

            $level = strtolower($level);

            if ($level == 'debug') {
                continue;
            }

            $timestamp = gmdate('Y-m-d\TH:i:s\Z', strtotime($timestamp));

            preg_match("/{$parrern_level}/i", strtolower($level), $match);

            $level = isset($match[0]) ? $match[0] : 'error';


            $d_options = [
                'timestamp' => $timestamp,
                'level'     => $level,
            ];

            if ($level == 'info') {
                $d_options['fingerprint'] = [trim(substr($message, 0, strpos($message, '{')))];
            }

            $client->captureMessage($message, array(), $d_options);
        }
    }
}