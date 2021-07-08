@extends('layout/main')
@section('title', 'Skill Test Hexavara')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">TeleRakus</h1>
            <table class="table">
                <thead class="thead">
                    <tr class="table-dark">
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">bayar</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($coba as $coba)
                    <tr>
                        <th scope="row">{{ $coba->id }}</th>
                        <td>{{ $coba->name }}</td>
                        <td>{{ $coba->bayar }}</td>
                        <td>
                            <a href="" class="badge bg-success">edit</a>
                            <a href="" class="badge bg-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection