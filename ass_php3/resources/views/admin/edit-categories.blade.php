@extends('layout.master')
@section('info')
    Sửa danh mục
@endsection
@section('title', 'Sửa danh mục')


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
            <input type="hidden" name="id" value="{{$categories->id}}">
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                value="{{isset($categories) ? $categories->name : ''}}"
            />
        </div>
        <div class="form-group">
            <label for="parent_id">parent_id</label>
            <input
                id="parent_id"
                type="number"
                class="form-control"
                name="parent_id"
               value="{{isset($categories) ? $categories->parent_id : ''}}"
            />
        </div>
        
        <div>
            <button
                type="submit"
                class="btn btn-submit"
            >
               Sửa Danh Mục
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