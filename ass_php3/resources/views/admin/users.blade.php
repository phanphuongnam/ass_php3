@extends('layout.master')
@section('info')
    Users
@endsection
@section('title')
    Users
@endsection

@section('content1')
    <a href="{{route('users.add')}}">
        <button type="button" class="btn btn-primary">Thêm</button>
    </a>
    <table border='1'
     style="border:2px solid black;width: 100%;text-align: center;" >
        <thead>
        <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">First Name</th>
            <th style="text-align: center;">Last Name</th>
            <th style="text-align: center;">Email</th>
           
            <th style="text-align: center;">Address</th>
            <th style="text-align: center;">Birth Day</th>
            <th style="text-align: center;">is_active</th>
            <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->first_name}}</td>
                    <td>{{$u->last_name}}</td>
                    <td>{{$u->email}}</td>
                   
                    <td>{{$u->address}}</td>
                    <td>{{$u->birth_day  }}</td>
                    <td>{{$u->is_active}}</td>
                    
                    <td>
                        <a href="{{route('users.edit',$u->id)}}">
                            <button type="button" class="btn btn-success">Sửa</button>

                        </a>
                        <a onclick="return confirm('Bạn có muốn xóa users này không?')" href="{{route('users.delete',$u->id)}}" id="nam12345">
                              <button type="submit" class="btn btn-danger">
                                Xóa
                            </button>

                        </a>
                        <a href="{{route('users.detail',$u->id)}}">
                              <button type="button" class="btn btn-success">
                                Xem Chi Tiết
                            </button>

                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
 <!-- Modal -->
<!--     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Delete</button>
        </div>
        </div>
    </div>
    </div> -->
  
@endsection