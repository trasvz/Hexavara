@extends('layout/main')
@section('title', 'Skill Test Hexavara')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">TeleRakus</h1>

            <a href="/hexavara/create" class="btn btn-primary my-3">Add Data</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group">
                @foreach($coba as $coba)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $coba->name }}
                    <a href="/hexavara/{{$coba->id}}" class="badge bg-info">Details</a>
                </li>
                @endforeach
            </ul>
            
        </div>
    </div>
</div>
@endsection