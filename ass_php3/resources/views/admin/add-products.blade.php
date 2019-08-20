@extends('layout.master')
@section('info')
    Thêm sản phẩm
@endsection
@section('title', 'Thêm sản phẩm')

@section('link')
    <a href="{{route('products.add')}}">Thêm Product</a>
        
    
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
    <form action="{{route(isset($products) ? 'products.update' : 'products.create-post')}}" method="post">
        @csrf
        @if(isset($products))
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
            <label for="Category_id">Category_id</label>
            <input
                id="Category_id"
                type="number"
                class="form-control"
                name="category_id"
               
            />
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input
                id="description"
                type="text"
                class="form-control"
                name="description"
               
            />

        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input
                type="number"
                class="form-control"
                name="price"
                id="Price"
               
            />
        </div>
          <div class="form-group">
            <label for="sale_percent">sale_percent</label>
            <input
                type="number"
                class="form-control"
                name="sale_percent"
                id="sale_percent"
               
            />
        </div>
          <div class="form-group">
            <label for="stock">stock  </label>
            <input
                type="number"
                class="form-control"
                name="stocks"
                id="stocks"
                
               
            />
        </div>
          <div class="form-group">
            <label for="">is active  </label>
            <input
                type="text"
                class="form-control"
                name="is_active"
                id=""
                
               
            />
        </div>
        <div>
            <button
                type="submit"
                class="btn btn-submit"
            >
               Thêm Sản Phẩm
            </button>
        </div>
       
    </form>
     <div>
            <a href="{{route('products.list')}}">
                <button class="btn btn">
                   Hủy
                </button>

            </a>
        </div>
@endsection