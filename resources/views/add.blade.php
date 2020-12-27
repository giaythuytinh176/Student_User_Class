@extends('layouts.master')

@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container">
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
                            <form action="{{ route("add.store") }}" method="post">
                                @csrf
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tr>
                                        <th><label for="">Fist Name</label></th>
                                        <td>
                                            <input type="text" name="first_name" class="form-control" value="{{ old("first_name") }}">
                                            @if($errors->any())
                                                <p class="alert-danger">{{ $errors->first("first_name") }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="">Last Name</label></th>
                                        <td>
                                            <input type="text" name="last_name" class="form-control" value="{{ old("last_name") }}">
                                            @if($errors->any())
                                                <p class="alert-danger">{{ $errors->first("last_name") }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="">Class</label></th>
                                        <td>
                                            {{--<input type="text" name="class" class="form-control" value="{{ old("class") }}">--}}
                                            <select name="class_id" id="class_id" class="form-control">
                                                @foreach($classes as $v)
                                                    <option value="{{ $v->id ?? old("class_id") }}">{{ $v->name }}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->any())
                                                <p class="alert-danger">{{ $errors->first("class_id") }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="">Address</label></th>
                                        <td>
                                            <input type="text" name="address" class="form-control" value="{{ old("address") }}">
                                            @if($errors->any())
                                                <p class="alert-danger">{{ $errors->first("address") }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="">Phone</label></th>
                                        <td>
                                            <input type="number" name="phone" class="form-control" value="{{ old("phone") }}">
                                            @if($errors->any())
                                                <p class="alert-danger">{{ $errors->first("phone") }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="">Birthday</label></th>
                                        <td>
                                            <input type="date" name="birthday" class="form-control" value="{{ old("birthday") }}">
                                            @if($errors->any())
                                                <p class="alert-danger">{{ $errors->first("birthday") }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="">Email</label></th>
                                        <td>
                                            <input type="email" name="email" class="form-control" value="{{ old("email") }}">
                                            @if($errors->any())
                                                <p class="alert-danger">{{ $errors->first("email") }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th col="2">
                                            <input type="submit" class="form-submit" value="Submit">
                                        </th>
                                    </tr>
                                </table>
                            </form>
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
