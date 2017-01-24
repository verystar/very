<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 13/01/2017 10:48 AM
 */

namespace App\Console;

use Very\Console\Command;
use Very\Filesystem\File;

class Meta extends Command
{

    public function handle()
    {
        $file       = new File();
        $model_path = APP_PATH . 'app/Models';
        $files      = $file->scanDir($model_path);
        $meta_file  = fopen(APP_PATH . '.phpstorm.meta.php', 'w');
        $meta_data  = <<< PHP_STORM_META
<?php
namespace PHPSTORM_META {
/**
* PhpStorm Meta file, to provide autocomplete information for PhpStorm
* Generated on 2017-01-12.
*/
\$STATIC_METHOD_TYPES = [
PHP_STORM_META;

        fwrite($meta_file, $meta_data . "\n");
        fwrite($meta_file, "		\app('') => [\n");
        fwrite($meta_file, "            '' == '@'," . "\n");

        foreach ($files as $file) {
            $file_info = pathinfo($file);
            if (strtolower($file_info['extension']) == 'php') {
                $class = explode('/', dirname(str_replace(APP_PATH, '', $file)));
                array_shift($class);
                $class[]    = $file_info['filename'];
                $class_name = implode('\\', $class);
                e($class_name);
                array_shift($class);

                if ($class) {
                    $meta_key = strtolower(implode('/', $class));
                    fwrite($meta_file, "			'" . ucwords($file_info['filename']) . "' instanceof \\App\\$class_name,\n");
                }
            }
        }

        fwrite($meta_file, "		],\n");

        $meta_data = <<< PHP_STORM_META
];
}
PHP_STORM_META;
        fwrite($meta_file, $meta_data);
        fclose($meta_file);
    }
}