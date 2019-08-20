<?php

namespace App\Http\Controllers;
use App\Model\users;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\ValidateLoginRequest;
use App\Http\Requests\ValidateRegisterRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
class UsersController extends Controller
{   

    
    public function index()
    {
        $users = users::all();
        return view('admin.users',['users'=>$users]);
    }
    public function createForm()

    {
        return view("admin.add-users");
    }
    public function getLogin()
    {   
        if (Auth::check()) {
            return redirect()->route('users.list');
        }else{
            return view('admin.login');
        }
        
    }
    public function postLogin(ValidateLoginRequest $request)
    {
        // dd(bcrypt('00000000000'));
         if (Auth::check()) {
            return redirect()->route('users.list');
        }
        $data = $request->only(['email', 'password']);
        
        $checkLogin = Auth::attempt($data);
       
        if ($checkLogin) {
            return redirect()->route('users.list');

        }else{
            return redirect()->route('users.getLogin');
            
        }
    }
    public function registerForm()
    {
        return view('admin.register');
    }
    public function register(Request $request){ 
      $this->validate($request,
        [
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'email' => 'required|unique:users,email|email',
            'address'=>'required',
            'password' => 'required|min:6|max:32',
            're-password' => 'required|min:6|max:32|same:password',
            'birth_day' => 'required'
            
        ],
        [

            'first_name.required' => 'Chưa nhập tên',
           
            'first_name.min' => 'Tên tối thiếu 2 kí tự',
            'last_name.required' => 'Chưa nhập họ',
            
            'last_name.min' => 'Họ tối thiếu 2 kí tự',
            'email.required' => 'Chưa nhập email',
            'email.unique' => 'Email đã được đăng kí',
            'email.email' => 'email chưa đúng định dạng',
            
            'address.required'=>'Chưa nhập địa chỉ',
            'password.required' => 'Chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu phải 6 ký tự',
            'password.max' => 'Mật khẩu tối đa chỉ được 32 ký tự',
            're-password.required' => 'Chưa nhập xác nhận mật khẩu',
            're-password.min' => 'Xác nhận mật khẩu tối thiểu phải 6 ký tự',
            're-password.max' => 'Xác nhận mật khẩu tối đa chỉ được 32 ký tự',
            're-password.same' => 'Mật khẩu không khớp',
            'birth_day.required'=>'Chưa nhập ngày sinh'
        ]);

       $users = new users();
       $data = $request->except('_token');
       $users->first_name=$data['first_name'];
       $users->last_name=$data['last_name'];
       $users->email=$data['email'];
       $users->password=Hash::make($request->password);
       $users->address=$data['address'];
      
       $users->birth_day=$data['birth_day'];
       $users->save();
        
        return redirect()->route('users.getLogin')->with('dnthanhcong','Đăng Kí Thành Công');
    }
     public function create(UsersRequest $request)
    {
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);

        $multiData = [
            $data
            
        ];
        users::insert($multiData);
       
        return $this->index();

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('users.getLogin');
    }
    public function editForm(users $users) {
       
        return view('admin.edit-users', ['users' => $users]);
    }
    public function update(UsersRequest $request) {
        // 1. Lay ra du lieu can update
        $data = $request->except('_token', 'id');
        // $data['password'] = Hash::make($data['password']);
        // 2. Tim ra classRoom co id truyen vao
        $users = users::find($request->id);
        // $classRoom = ClassRoom::where('id', '=' ,$request->id)->first();
        // 3. Update bang phuong thuc update
        $users->update($data);
        
        // 4. Tra ve danh sach
        return $this->index();
    }
    public function delete(users $users) {

    		$users->delete();
    		return $this->index();


    }
     public function detail(Request $request){
      
       $users = users::where('id',$request->id)->first();
        return view('admin.detail-users',['users'=>$users]);
    }
}
