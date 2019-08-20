<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ValidateRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|min:2',
            'last_name' => 'required|string|min:2',
            'email' => 'required|email:unique',
            'address'=>'required',
            'password' => 'required|min:6|max:32',
            'birth_day' => 'required',
            'is_active' => 'nullable|numeric',
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => 'Chưa nhập tên',
            'first_name.string' => 'Tên phải là kí tự từ A-Z',
            'first_name.min' => 'Tên tối thiếu 2 kí tự',
            'last_name.required' => 'Chưa nhập họ',
            'last_name.string' => 'Tên phải là kí tự từ A-Z',
            'last_name.min' => 'Họ tối thiếu 2 kí tự',
            'email.required' => 'Chưa nhập email',
            'email.email' => 'Email chưa đúng định dạng',
            'email.unique' => 'Email đã được đăng kí',
            'address.required'=>'Chưa nhập địa chỉ',
            'password.required' => 'Chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu phải 6 ký tự',
            'password.max' => 'Mật khẩu tối đa chỉ được 32 ký tự',
            'birth_day.required'=>'Chưa nhập ngày sinh',
        ];
    }
}