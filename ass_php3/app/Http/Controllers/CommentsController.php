<?php

namespace App\Http\Controllers;
use App\Model\comments;
use Illuminate\Http\Request;
use App\Http\Requests\CommentsRequest;
class CommentsController extends Controller
{
    public function index()
    {
        $comments = comments::all();
       
        return view('admin.comments',['comments'=>$comments]);
    }
    public function createForm()

    {
        return view("admin.add-comments");
    }
     public function create(CommentsRequest $request)
    {
        $data = $request->except('_token');
        $multiData = [
            $data
            
        ];
        comments::insert($multiData);
        
        return $this->index();

    }
    public function editForm(comments $comments) {
       
        return view('admin.edit-comments', ['comments' => $comments]);
    }
    public function update(CommentsRequest $request) {
        
        $data = $request->except('_token', 'id');
        
        $comments = comments::find($request->id);
       
        $comments->update($data);
        
      
        return $this->index();
    }
    public function delete(comments $comments) {

    		$comments->delete();
    		return $this->index();


    }
     public function detail(Request $request){
      
       $comments = comments::where('id',$request->id)->first();
        return view('admin.detail-comments',['comments'=>$comments]);
    }
}
