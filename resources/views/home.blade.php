@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if(Auth::user()->role == 'admin')
                    <a href="/create-role" class="btn btn-primary btn-sm">Create Role</a>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Nama</td>
                                <td>Email</td>
                                <td>Active</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $data)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->active }}</td>
                                <td>
                                    edit - delete
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection