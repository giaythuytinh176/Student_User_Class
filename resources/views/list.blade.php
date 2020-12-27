@extends('layouts.master')

@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fist Name</th>
                                    <th>Last Name</th>
                                    <th>Class</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Birthday</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $key => $value)
                                    <tr>
{{--                                        <td>{{ $students->firstItem() + $key }}</td>--}}
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->first_name }}</td>
                                        <td>{{ $value->last_name }}</td>
                                        <td>
                                            <a href="{{ route("class.detail", ['id'=>$value->class_id]) }}">{{ \App\Models\stdClass::findOrFail($value->class_id)->name }}</a>
                                        </td>
                                        <td>{{ $value->address }}</td>
                                        <td>{{ $value->phone }}</td>
                                        <td>{{ $value->birthday }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>
                                            <a href="{{ route("edit", ["id"=> $value->id]) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route("delete.destroy", ["id"=> $value->id]) }}" onclick="return confirm('Are you want to delete this student?')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Fist Name</th>
                                    <th>Last Name</th>
                                    <th>Class</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Birthday</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
{{--                            {{ $students->links() }}--}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection
