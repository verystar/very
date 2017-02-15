<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 14/02/2017 2:41 PM
 */

namespace App\Http\Requests;

use Very\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * authorize权限返回false的时候调用
     */
    public function forbiddenResponse()
    {
        echo '权限验证失败';

        exit;
    }

    public function response(array $error)
    {
        echo '表单验证失败';

        print_r($error);

        exit;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * return array
     */
    public function rules()
    {
        return [
            'b' => 'required_with_all:a,c',
            'c' => 'required|regex:[^[0-9a-zA-Z_-]+$]',
            'd' => 'required_with:c',
            'phone_no' => 'required|regex:[^[0-9]+$]'
        ];
    }
}