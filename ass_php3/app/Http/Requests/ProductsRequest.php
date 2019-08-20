<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'category_id' => 'required|min:1|max:30',
            'description' => 'required',
            'price' => 'required|min:1|max:32',
            'sale_percent'=> 'required|string|min:1|max:32',
            'stocks'=>'required|string|min:1|max:32',
            'is_active' =>'required|string',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Chưa điền tên sản phẩm ',
            'name.string' => 'Chưa điền tên sản phẩm ',
            'name.min' => 'Tên sản phẩm 4 kí tự trở lên',
            'category_id.required' => 'Chưa điền mã danh mục',
            'category_id.max' => 'Mã danh mục tối đa 30 kí tự',
            'description.required' => 'Chưa điền mô tả',
            'price.required' => 'Chưa Nhập Giá',
            'price.max' => 'Giá sản phẩm tối đa 32 kí tự',
            'sale_percent.required'=> 'Chưa nhập phần trăm bán hàng',
            'sale_percent.max'=> 'Phần trăm bán hàng tối đa 32 kí tự',
            'stocks.required'=>'Chưa nhập kho hàng dữ trữ',
            'stocks.max'=> 'kho hàng dữ trữ tối đa 32 kí tự',
            'is_active.required'=>'Chưa chọn active',
        ];
    }
}
