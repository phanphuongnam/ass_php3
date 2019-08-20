@extends('layout.master')
@section('info')
    Chi Tiết Danh Mục
@endsection
@section('title', 'Chi Tiết Danh Mục')

@section('link')
   
@endsection
@section('content1')
    <!-- <div class="col-lg-12 container bg-green"> -->
<!--     <div class="col-md-4 btn bg-primary text-center"><h4>Mã Danh Mục:</h4>
     {{$categories->id}} 
    </div>
    <br>
     <div class="col-md-4 bg-primary text-center"><h4>Tên Danh Mục</h4> {{$categories->name}} </div>   
    <div class="col-md-4 bg-primary text-center"><h4>Mã Danh Mục Cha:</h4>

     {{$categories->parent_id}} </div>
     </div> -->
     <!-- Standard button -->

   <div class="container-fluid">
   

      <!-- Main content -->
      <section class="content text-center">
        <div class="box box-default">
          <div class="box-header bg-green with-border">
            <h3 class="box-title">Thông Tin Danh Mục</h3>
          </div>
          <div class="box-body">
            <h4>Mã Danh Mục: {{$categories->id}}</h4>
            <h4>Tên Danh Mục: {{$categories->name}}</h4>
            <h4>Danh Mục Cha: {{$categories->parent_id}}</h4>
          </div>
        </div>

        
       
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->



@endsection