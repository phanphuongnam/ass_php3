@extends('layout.master')
@section('info')
    Chi Tiết Users
@endsection
@section('title', 'Chi Tiết Users')

@section('link')
   
@endsection
@section('content1')
 

   <div class="container-fluid">
   

      <!-- Main content -->
      <section class="content text-center">
        <div class="box box-default">
          <div class="box-header bg-green with-border">
            <h3 class="box-title">Thông Tin Users</h3>
          </div>
          <div class="box-body">
            <h4>First Name: {{$users->first_name}}</h4>
            <h4>Last Name: {{$users->last_name}}</h4>
            <h4>Email: {{$users->email}}</h4>
          
            <h4>Address: {{$users->address}}</h4>
            <h4>Birth Day: {{$users->birth_day}}</h4>
            <h4>Is Active: {{$users->is_active}}</h4>
          </div>
        </div>

        
       
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->



@endsection