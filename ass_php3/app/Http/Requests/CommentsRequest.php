<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsRequest extends FormRequest
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
            'user_id' => 'required|max:30',
            'product_id' => 'required|max:30',
            'content' => 'required|string',
            

        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'Chưa nhập user id',
            'user_id.max' => 'User id tối đa 30',
            'product_id.required' => 'Chưa nhập product_id',
            'product_id.max' => 'Product_id tối đa 30',

            'content.required' => 'Chưa nhập nội dung',
        ];
    }
}
