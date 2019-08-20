@extends('layout.master')
@section('info')
    Sửa comments
@endsection
@section('title', 'Sửa comments')

@section('link')
    <a href="{{route('comments.add')}}"></a>
        
    
@endsection
@section('content1')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route(isset($comments) ? 'comments.update' : 'comments.create-post')}}" method="post">
        @csrf
        @if(isset($comments))
            <input type="hidden" name="id" value="{{$comments->id}}">
        @endif

        <div class="form-group">
            <label for="">user_id</label>
            <input
                id=""
                type="number"
                class="form-control"
                name="user_id"
                value="{{isset($comments) ? $comments->user_id : ''}}"
               
            />
        </div>
        <div class="form-group">
            <label for="">product_id</label>
            <input
                id=""
                type="number"
                class="form-control"
                name="product_id"
               value="{{isset($comments) ? $comments->product_id : ''}}"
            />
        </div>
        <div class="form-group">
            <label for="">content</label>
            <input
                id=""
                type="text"
                class="form-control"
                name="content"
               value="{{isset($comments) ? $comments->content : ''}}"
            />

        </div>
        
        <div>
            <button
                type="submit"
                class="btn btn-submit"
            >
               Sửa Comments
            </button>
        </div>
       
    </form>
     <div>
            <a href="{{route('comments.list')}}">
                <button class="btn btn">
                   Hủy
                </button>

            </a>
        </div>
@endsection