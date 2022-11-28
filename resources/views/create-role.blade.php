@extends('master')
@push('title', 'create role')

@section('content')

<form action="{{ route('store-role') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="name" class="form-control" placeholder="Nama">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="">Role</label>
        <select name="role" id="" class="form-control">
            <option value="admin">Admin</option>
            <option value="finance">Finance</option>
            <option value="support">Support</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection