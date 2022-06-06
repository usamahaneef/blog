@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 my-5">

                {{-- @if($errors->any())
                    @foreach ($errors as $err)
                        <p class="alert alert-danger">{{$err->message}}</p>
                    @endforeach
                @endif --}}

                <form method="POST" action="{{route('register/form')}}">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" autocomplete="off">
                        @error('name')<span class=" text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">User Name</label>
                        <input type="text" name="username" class="form-control" autocomplete="off">
                        @error('username')<span class=" text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" >
                        @error('password')<span class=" text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control">
                        @error('confirmpassword')<span class=" text-danger">{{$message}}</span>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a class="btn btn-danger" href="{{url('/')}}">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection