@extends('layouts.mainlayout')

@section('content')


    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1>Laravel 8 Crud</h1>

                <div class="card">

                    <div class="card-header">

                        <h4>Create Departments</h4>

                        <a href="{{route('main')}}" class="btn btn-primary float-end">Back</a>

                    </div>


                    <div class="card-body">

                        <form action="{{ route('user')}}" method="post">

                            @csrf

@if (Session::get('success'))
<div class="alert alert-success">
{{Session::get('success')}}
</div>
@endif

@if (Session::get('fail'))
<div class="alert alert-danger">
{{Session::get('fail')}}
</div>
@endif

<div class="form-group mb-3">
                                <label for="Name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                                <span class="text-danger">@error('name')<b>{{$message}}</b>@enderror</span>

                            </div>

                            <div class="form-group mb-3">

                                <label for="Email">Email: </label>

                                <input type="text" name="email" id="email" class="form-control">
                                <span class="text-danger">@error('email')<b>{{$message}}</b>@enderror</span>

                            </div>


                            <div class="form-group mb-3">

                                <label for="Password">Password:</label>

                                <input type="password" name="password" id="pasword" class="form-control">
                                <span class="text-danger">@error('password')<b>{{$message}}</b>@enderror</span>

                            </div>
                            <div class="form-group mb-3">

                                <label for="Select Department">Select Department</label>
                                <select name="department" id="department" class="form-control">


                                    <option value="disabled" disabled="true">Select Department</option>


                                    @foreach ($user as $row )
                                    <option value="{{$row->d_id}}">{{$row->d_name}}</option>


                                    @endforeach
                                </select>
                                <span class="text-danger">@error('department')<b>{{$message}}</b>@enderror</span>

                            </div>


                            <div class="form-group mb-3">

                                <button type="submit" class="btn btn-success">Create User</button>

                            </div>
                        </form>

                    </div>

                </div>




            </div>


        </div>

    </div>



@endsection
