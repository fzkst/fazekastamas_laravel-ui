@extends('components/app')

@section('content')
    <div class="row">
        <h1>Operák:</h1>
        <div class="gy-4">
            <a class="btn btn-outline-secondary ms-1 mb-4 fw-bold"  href="{{ url('/operas/create') }}">Új opera felvétele</a>
        </div>
        @foreach ($operas as $opera)
            <div class="card gy-4 p-0 mx-auto" style="width: 22rem;">
                <div class="card-header">
                  {{$opera->name}}
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><th>Name: </th><td>{{$opera->name}}</td></li>
                  <li class="list-group-item"><th>Country: </th><td>{{$opera->country}}</td></li>
                  <li class="list-group-item"><th>City: </th><td>{{$opera->city}}</td></li>
                  <li class="list-group-item"><th>Construction time: </th><td>{{$opera->const_time}}</td></li>
                  <li class="list-group-item"><th>Seats count: </th><td>{{$opera->seats_count}}</td></li>
                  <li class="list-group-item"><th>Rating: </th><td>{{$opera->ratings}}</td></li>
                </ul>
                <div class="card-footer row g-2">
                    <div class="col">
                        <a href="{{ url('operas/'.$opera->id)}} "><button class="btn btn-outline-primary fw-bold">Megnéz</button></a>
                    </div>
                    <div class="col ms-3">
                        <a href="{{ url('operas/'.$opera->id.'/edit')}} "><button class="btn btn-outline-warning fw-bold">Módosítás</button></a>
                    </div>
                    <div class="col text-end">
                        <form action="{{ url('operas/'.$opera->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href=""><button class="btn btn-outline-danger fw-bold">Törlés</button></a>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
