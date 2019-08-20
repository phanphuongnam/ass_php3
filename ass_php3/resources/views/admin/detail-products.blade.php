@extends('layout.master')
@section('info')
    Chi Tiết Sản Phẩm
@endsection
@section('title', 'Chi Tiết Sản Phẩm')

@section('link')
   
@endsection
@section('content1')
   

    <div class="container-fluid">
   

      <!-- Main content -->
      <section class="content text-center">
        <div class="box box-default">
          <div class="box-header bg-green with-border">
            <h3 class="box-title">Thông Tin Sản Phẩm</h3>
          </div>
          <div class="box-body">
            <h4>Tên Sản Phẩm: {{$products->name}}</h4>
            <h4>Mã Danh Mục: {{$products->category_id}}</h4>
            <h4>Mô Tả: {{$products->description}}</h4>
            <h4>Giá: {{$products->price}} VNĐ</h4>
            <h4>Phần trăm bán hàng: {{$products->sale_percent}} %</h4>
            <h4>Kho hàng dữ trữ: {{$products->stocks}}</h4>
            <h4>Is_active: {{$products->stocks}}</h4>
            <h4>Danh Mục: 
                        
                        @if(isset($products->category))
                       
                          {{$products->category->name}}
                       
                      @else
                        không có danh mục
                      @endif
            </h4>
          </div>
        </div>

        
       
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->



@endsection