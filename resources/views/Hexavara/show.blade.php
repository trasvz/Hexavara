@extends('layout/main')
@section('title', 'Skill Test Hexavara')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Details</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $modeltagihan->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $modeltagihan->phone }}</h6>
                    <p class="card-text">histori</p>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="/hexavara" class="card-link">Back</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection