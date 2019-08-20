@extends('layout.master')
@section('info')
    Thêm danh mục
@endsection
@section('title', 'Thêm danh mục')

@section('link')
    
        
    
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
    <form action="{{route(isset($categories) ? 'categories.update' : 'categories.create-post')}}" method="post">
        @csrf
        @if(isset($categories))
            <input type="hidden" name="id">
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
               
            />
        </div>
        <div class="form-group">
            <label for="parent_id">Parent_id</label>
            <input
                id="parent_id"
                type="text"
                class="form-control"
                name="parent_id"
               
            />
        </div>
        
        <div>
            <button
                type="submit"
                class="btn btn-submit"
            >
               Thêm Danh Mục
            </button>
        </div>
       
    </form>
     <div>
            <a href="{{route('categories.list')}}">
                <button class="btn btn">
                   Hủy
                </button>

            </a>
        </div>
@endsection