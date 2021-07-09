@extends('layout/main')
@section('title', 'Skill Test Hexavara')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Edit Data</h1>

            <form method="post" action="/hexavara/{{ $modeltagihan->id }}">
            @method('patch')
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name" required value="{{ $modeltagihan->name }}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Masukkan Nama" name="phone" required value="{{ $modeltagihan->phone }}">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
            
        </div>
    </div>
</div>
@endsection