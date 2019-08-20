@extends('layout.master')
@section('info')
    Thêm users
@endsection
@section('title', 'Thêm users')

@section('link')
    <a href="{{route('users.add')}}">Thêm User</a>
        
    
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
    <form action="{{route(isset($user) ? 'users.update' : 'users.create-post')}}" method="post">
        @csrf
        @if(isset($user))
            <input type="hidden" name="id">
        @endif

        <div class="form-group">
            <label for="name">First Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="first_name"
               
            />
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input
                id=""
                type="text"
                class="form-control"
                name="last_name"
               
            />
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input
                id=""
                type="text"
                class="form-control"
                name="email"
               
            />

        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input
                type="password"
                class="form-control"
                name="password"
                id="password"
               
            />
        </div>
          <div class="form-group">
            <label for="">Address</label>
            <input
                type="text"
                class="form-control"
                name="address"
                id="address"
               
            />
        </div>
          <div class="form-group">
            <label for="">Birth Day</label>
            <input
                type="date"
                class="form-control"
                name="birth_day"
                id=""
                
               
            />
        </div>
        <div class="form-group">
            <label for="">Is Active</label>
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
               Thêm User
            </button>
        </div>
       
    </form>
     <div>
            <a href="{{route('users.list')}}">
                <button class="btn btn">
                   Hủy
                </button>

            </a>
        </div>
@endsection