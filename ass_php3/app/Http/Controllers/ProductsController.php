<?php

namespace App\Http\Controllers;
use App\Model\products;
use App\Model\categories;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;

class ProductsController extends Controller
{
    
	public function index()
    {
        $products = products::all();
        $products=$products->load('category');
        
        return view('admin.products',['products'=>$products]);
    }
    public function createForm()

    {
        return view("admin.add-products");
    }
     public function create(ProductsRequest $request)
    {
        $data = $request->except('_token');
        $multiData = [
            $data
            
        ];
        products::insert($multiData);
        // return view('admin.products', ['products'=>products::all()]);
        return $this->index();

    }
    public function editForm(products $products) {
       
        return view('admin.edit-products', ['products' => $products]);
    }
    public function update(ProductsRequest $request) {
        // 1. Lay ra du lieu can update
        $data = $request->except('_token', 'id');
        // 2. Tim ra classRoom co id truyen vao
        $products = products::find($request->id);
        // $classRoom = ClassRoom::where('id', '=' ,$request->id)->first();
        // 3. Update bang phuong thuc update
        $products->update($data);
        // 4. Tra ve danh sach
        return $this->index();
    }
    public function delete(products $products) {

    		$products->delete();
    		return $this->index();


    }
     public function detail(Request $request){
      
       $products = products::where('id',$request->id)->first();
        return view('admin.detail-products',['products'=>$products]);
    }


}
