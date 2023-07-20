@extends('layouts.app')

@section('content')

<h2> Tambah Data User </h2>

    <form action="{{ url('pengguna') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" name="user_email" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="text" name="user_password" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="user_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <input type="text" name="user_alamat" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No HP</label>
            <input type="text" name="user_hp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Kode Pos</label>
            <input type="text" name="user_pos" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Role</label>
            <input type="text" name="user_role" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">User Aktif</label>
            <input type="text" name="user_aktif" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>

@endsection