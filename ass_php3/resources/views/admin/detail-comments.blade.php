@extends('layout.master')
@section('info')
    Chi Tiết Comments
@endsection
@section('title', 'Chi Tiết Comments')

@section('link')
   
@endsection
@section('content1')
 

   <div class="container-fluid">
   

      <!-- Main content -->
      <section class="content text-center">
        <div class="box box-default">
          <div class="box-header bg-green with-border">
            <h3 class="box-title">Thông Tin Comments</h3>
          </div>
          <div class="box-body">
            <h4>user_id: {{$comments->user_id}}</h4>
            <h4>product_id: {{$comments->product_id}}</h4>
            <h4>Content: {{$comments->content}}</h4>
            
          </div>
        </div>

        
       
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->



@endsection