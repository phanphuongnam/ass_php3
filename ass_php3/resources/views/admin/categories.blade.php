@extends('layout.master')
@section('info')
    Danh Mục
@endsection
@section('title',' Danh Mục')
   



@section('content1')
    <a href="{{route('categories.add')}}">
        <button type="button" class="btn btn-primary">Thêm</button>
    </a>
    <table border='1'
     style="border:2px solid black;width: 100%;text-align: center;" >
        <thead>
        <tr >
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">Name</th>
            <th style="text-align: center;">Parent_id</th>
            <th style="text-align: center;">Action</th>
           
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->parent_id}}</td>
                    
                    
                    <td>
                        <a href="{{route('categories.edit',$c->id)}}">
                            <button type="button" class="btn btn-success">Sửa</button>

                        </a>
                        <a onclick="return confirm('Bạn có muốn xóa danh mục này không?')" href="{{route('categories.delete',$c->id)}}" id="nam12345">
                              <button type="submit" class="btn btn-danger">
                                Xóa
                            </button>

                        </a>
                        <a href="{{route('categories.detail',$c->id)}}">
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