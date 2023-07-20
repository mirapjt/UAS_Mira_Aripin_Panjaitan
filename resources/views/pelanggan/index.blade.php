@extends('layouts.app')

@section('content')

<h2> Data Pelanggan </h2>
<br>
<a href="{{ url('pelanggan/create') }}" class="btn btn-success">Tambah Data</a>
<br>
<br>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID PELANGGAN</th>
        <th>ID GOLONGAN</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>HP</th>
        <th>ID USER</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->pel_id }}</td>
        <td>{{ $row->pel_id_gol }}</td>
        <td>{{ $row->pel_nama }}</td>
        <td>{{ $row->pel_alamat }}</td>
        <td>{{ $row->pel_hp }}</td>
        <td>{{ $row->pel_id_user }}</td>
        <td><a href="{{ url('pelanggan/edit/' .$row->pel_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('pelanggan/' .$row->pel_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>

    </tr>
    @endforeach

</table>

@endsection