@extends('layout.master')
@section('info')
    Sản Phẩm
@endsection
@section('title')
    Sản Phẩm
@endsection

@section('content1')
    <a href="{{route('products.add')}}">
        <button type="button" class="btn btn-primary">Thêm</button>
    </a>
    <table border='1'
     style="border:2px solid black;width: 100%;text-align: center;" >
        <thead>
        <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">Name</th>
            <th style="text-align: center;">category_id</th>
            <th style="text-align: center;">description</th>
            <th style="text-align: center;">price</th>
            <th style="text-align: center;">sale_percent</th>
            <th style="text-align: center;">stocks</th>
            <th style="text-align: center;">is_active</th>
            <th style="text-align: center;">Categories</th>
            <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        <tbody>
            
            @foreach($products as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->category_id}}</td>
                    <td>{{$p->description}}</td>
                    <td>{{$p->price}}</td>
                    <td>{{$p->sale_percent}}</td>
                    <td>{{$p->stocks}}</td>
                    <td>{{$p->is_active}}</td>
                    <td>
                        
                        @if(isset($p->category))
                       
                          <p>{{$p->category->name}}</p>
                       
                      @else
                        <p>không có danh mục</p>
                      @endif



                    </td>
                    <td>
                        <a href="{{route('products.edit',$p->id)}}">
                            <button type="button" class="btn btn-success">Sửa</button>

                        </a>
                        <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="{{route('products.delete',$p->id)}}" id="nam12345">
                              <button type="submit" class="btn btn-danger">
                                Xóa
                            </button>

                        </a>
                        <a href="{{route('products.detail', $p->id)}}">
                              <button type="button" class="btn btn-success">
                                Xem Chi Tiết
                            </button>
                            
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

  
@endsection