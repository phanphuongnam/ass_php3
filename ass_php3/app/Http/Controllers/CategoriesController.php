<?php

namespace App\Http\Controllers;
use App\Model\categories;
use App\Model\products;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;


class CategoriesController extends Controller
{
    public function index()
    {
        $categories = categories::all();
       $categories=$categories->load('products');
        return view('admin.categories',['categories'=>$categories]);
    }
    public function createForm()

    {
        return view("admin.add-categories");
    }
     public function create(CategoriesRequest $request)
    {
        $data = $request->except('_token');
        $multiData = [
            $data
            
        ];
        categories::insert($multiData);
        // return view('admin.products', ['products'=>products::all()]);
        return $this->index();

    }
    public function editForm(categories $categories) {
       
        return view('admin.edit-categories', ['categories' => $categories]);
    }
    public function update(CategoriesRequest $request) {
        // 1. Lay ra du lieu can update
        $data = $request->except('_token', 'id');
        // 2. Tim ra classRoom co id truyen vao
        $categories = categories::find($request->id);
        // $classRoom = ClassRoom::where('id', '=' ,$request->id)->first();
        // 3. Update bang phuong thuc update
        $categories->update($data);
        
        // 4. Tra ve danh sach
        return $this->index();
    }
    public function delete(categories $categories) {

    		$categories->delete();
    		return $this->index();


    }
     public function detail(Request $request){
      
       $categories = categories::where('id',$request->id)->first();
        return view('admin.detail-categories',['categories'=>$categories]);
    }
  
}
