<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    'after'                => ':attribute 必须是一个在 :date 之后的日期。',
    'alpha'                => ':attribute 只能由字母组成。',
    'alpha_dash'           => ':attribute 只能由字母、数字和斜杠组成。',
    'alpha_num'            => ':attribute 只能由字母和数字组成。',
    'array'                => ':attribute 必须是一个数组。',
    'before'               => ':attribute 必须是一个在 :date 之前的日期。',
    'between'              => ':attribute 必须介于 :min - :max 之间。',
    'boolean'              => ':attribute 必须为布尔值。',
    'confirmed'            => ':attribute 两次输入不一致。',
    'date'                 => ':attribute 不是一个有效的日期。',
    'different'            => ':attribute 和 :other 必须不同。',
    'digits'               => ':attribute 必须是 :digits 位的数字。',
    'digits_between'       => ':attribute 必须是介于 :min 和 :max 位的数字。',
    'email'                => ':attribute 不是一个合法的邮箱。',
    'in'                   => '已选的属性 :attribute 非法。',
    'integer'              => ':attribute 必须是整数。',
    'ip'                   => ':attribute 必须是有效的 IP 地址。',
    'json'                 => ':attribute 必须是正确的 JSON 格式。',
    'max'                  => ':attribute 不能大于 :max。',
    'min'                  => ':attribute 必须大于等于 :min。',
    'not_in'               => '已选的属性 :attribute 非法。',
    'numeric'              => ':attribute 必须是一个数字。',
    'present'              => ':attribute 必须存在。',
    'regex'                => ':attribute 格式不正确。',
    'required'             => ':attribute 不能为空。',
    'required_if'          => '当 :other 为 :value 时 :attribute 不能为空。',
    'required_unless'      => '当 :other 不为 :value 时 :attribute 不能为空。',
    'required_with'        => '当 :values 存在时 :attribute 不能为空。',
    'required_with_all'    => '当 :values 存在时 :attribute 不能为空。',
    'required_without'     => '当 :values 不存在时 :attribute 不能为空。',
    'required_without_all' => '当 :values 都不存在时 :attribute 不能为空。',
    'string'               => ':attribute 必须是一个字符串。',
    'timezone'             => ':attribute 必须是一个合法的时区值。',
    'url'                  => ':attribute 格式不正确。',
    'card'                 => ':attribute 格式不正确。',
    'phone'                => ':attribute 格式不正确。',
    'qq'                   => ':attribute 格式不正确。',
    'chinese'              => ':attribute 必须是中文。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name'       => [
            'rule-name' => 'custom-message',
        ],
        'phone_no'             => [
            'regex' => '手机号格式不正确',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of 'email'. This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                         => '名称',
        'username'                     => '用户名',
        'email'                        => '邮箱',
        'first_name'                   => '名',
        'last_name'                    => '姓',
        'password'                     => '密码',
        'password_confirmation'        => '确认密码',
        'city'                         => '城市',
        'country'                      => '国家',
        'address'                      => '地址',
        'phone'                        => '电话',
        'mobile'                       => '手机',
        'age'                          => '年龄',
        'sex'                          => '性别',
        'gender'                       => '性别',
        'day'                          => '天',
        'month'                        => '月',
        'year'                         => '年',
        'hour'                         => '时',
        'minute'                       => '分',
        'second'                       => '秒',
        'title'                        => '标题',
        'content'                      => '内容',
        'description'                  => '描述',
        'excerpt'                      => '摘要',
        'date'                         => '日期',
        'time'                         => '时间',
        'available'                    => '可用的',
        'size'                         => '大小',
        'client_id'                    => '终端ID',
        'client_sn'                    => '终端编号',
        'client_name'                  => '终端名',
        'store_id'                     => '门店',
        'start_time'                   => '开始时间',
        'end_time'                     => '结束时间',
        'user_name'                    => '用户名',
    ],
];
