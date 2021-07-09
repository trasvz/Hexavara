@extends('layout/main')
@section('title', 'Skill Test Hexavara')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">TeleRakus</h1>

            <ul class="list-group">
                @foreach($coba as $coba)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $coba->name }}
                    <a href="/hexavara/{{$coba->id}}" class="badge bg-info">details</a>
                </li>
                @endforeach
            </ul>
            
        </div>
    </div>
</div>
@endsection