@extends('layouts.mainlayout')

@section('content')


    <div class="container">

        <div class="row">

            <div class="col-md-12">


                <div class="card">

                    <div class="card-header">

                        <h4>Create Departments</h4>

                        <a href="{{Route('main')}}" class="btn btn-primary float-end">Back</a>

                    </div>


                    <div class="card-body">

                        <form action="{{ route('store') }}" method="post">

                            @csrf
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>

                            @endif

                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>

                            @endif

                            <div class="form-group mb-3">
                                <label for="Name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">


                                <span class="text-danger">@error('d_name')<b>{{$message}}</b>@enderror</span>

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
