<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
            'name' => 'required|string|min:4',
            'parent_id' => 'required|min:1|max:30',
            

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Chưa điền tên danh mục ',
            'name.string' => 'Chưa điền tên danh mục ',
            'name.min' => 'Tên danh mục 4 kí tự trở lên',
            'parent_id.required' => 'Chưa điền mã danh mục',
            
        ];
    }
}
