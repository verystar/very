<?php
return array(
    'charset'       => 'utf-8',
    'timezone'      => 'Asia/Shanghai',
    'resource_url'=> ENVIRON == 'local' ? '//localhost/' : '//localhost/',
    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    | see monolog
    |
    */
    'log_max_files' => 30,

    /*
    |--------------------------------------------------------------------------
    | Upload path Configuration
    |--------------------------------------------------------------------------
    |
    */
    'upload_path'   => APP_PATH . 'uploads',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */
    'providers'     => [
        /*
         * Very Framework Service Providers...
         */
        Very\Http\HttpServiceProvider::class,
        Very\Routing\RouterServiceProvider::class,
        Very\Support\StatServiceProvider::class,
        Very\Session\SessionServiceProvider::class,
        Very\Cookie\CookieServiceProvider::class,

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
    ]
);