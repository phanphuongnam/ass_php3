<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
public function rules(){
         return [
            'first_name'=>'required|string|min:2|max:60',
            'last_name'=>'required|string|min:2|max:60',
            'email'=>'required|email|min:8|max:40',
            'password'=>'required|string|min:6|max:30',
            'address'=>'required',
            'birth_day'=>'required',
            'is_active' =>'required|string',

        ];
    }

    public function messages()
    {
        return [
             'first_name.required'=>'Chưa điền tên',
             'first_name.min'=>'Tên cần nhập 2 kí tự trở lên',
             'first_name.max'=>'Tên tối đa 60 kí tự',
            'last_name.required'=>'Chưa điền họ',
             'last_name.min'=>'Họ cần nhập 2 kí tự trở lên',
             'last_name.max'=>'Họ tối đa 60 kí tự',
            'email.required'=>'Chưa nhập email',
            
            'email.email' => 'Sai định dạng Email',
            'email.min'=>'Email từ 8 kí tự trở lên',
            'email.max'=>'Email tối đa 40 kí tự',
            'password.required'=>'Chưa nhập password',
            'password.min'=>'Password từ 6 kí tự trở lên',
            'password.max'=>'Password tối đa 30 kí tự',
            'address.required'=>'Chưa điền địa chỉ',
            'birth_day.required'=>'Chưa nhập ngày sinh',
            'is_active.required' =>'Chưa nhập active',
        ];
    }
}
