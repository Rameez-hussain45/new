@extends('layouts.mainlayout')

@section('content')


    <div class="container">

        <div class="row">

            <div class="col-md-12">


                <div class="card">

                    <div class="card-header">

                        <h4>Users Details</h4>

                        <a href="{{ route('adduser') }}" class="btn btn-primary float-end">CreATE uSER</a>
                        <a href="{{ Route('adddept') }}" class="btn btn-primary float-end">Create Department</a>

                    </div>


                    <div class="card-body">

                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Department NAme</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all as $row)


                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->d_name }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>




            </div>


        </div>

    </div>



@endsection
