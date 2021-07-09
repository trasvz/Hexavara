@extends('layout/main')
@section('title', 'Skill Test Hexavara')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Details</h1>

            <div class="card">
                <div class="card-body">
                    <div class="container" >
                        <div class="row">
                            <div class="col">
                                <h4 class="card-title">{{ $modeltagihan->name }}</h4>
                                <h5 class="card-subtitle mb-2 text-muted">{{ $modeltagihan->phone }}</h5>
                            </div>
                            <div align="right" class="col" >
                                <a href="{{ $modeltagihan->id }}/edit" class="btn btn-success">Edit</a>
                                <form action="/hexavara/{{ $modeltagihan->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="/hexavara" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped" style="margin:auto;">
                            <thead class="thead" style="text-align: center;">
                                <tr class="table-dark">
                                    <th scope="col">Incoming Number</th>
                                    <th scope="col">Outgoing Number</th>
                                    <th scope="col">Duration (s)</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                @foreach($cards as $card)
                                <tr>
                                    <td>{{ $card->incoming_number }}</td>
                                    <td>{{ $card->outgoing_number }}</td>
                                    <td>{{ $card->duration }}</td>
                                    <td>{{ $card->dialed_on }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection