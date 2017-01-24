<?php

namespace App\Providers;

use App\Models\AppModel;
use App\Models\ClientModel;
use App\Models\CouponModel;
use App\Models\OperatorModel;
use App\Models\OrderModel;
use App\Models\StoreModel;
use App\Models\UserModel;
use App\Services\JobService;
use Very\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //这里注册需要用到但是又不能使用注入的方式使用的Model,采用app('UserModel')方式调用
        $this->app->singleton('UserModel', UserModel::class);
    }
}