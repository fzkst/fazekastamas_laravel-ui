@extends('components/app')

@section('content')
    <div class="card mt-5 p-0 mx-auto" style="width: 28rem;">
        <div class="card-header">
        {{$opera->name}}
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"><th>Country: </th><td>{{$opera->country}}</td></li>
        <li class="list-group-item"><th>City: </th><td>{{$opera->city}}</td></li>
        <li class="list-group-item"><th>Construction time: </th><td>{{$opera->const_time}}</td></li>
        <li class="list-group-item"><th>Seats count: </th><td>{{$opera->seats_count}}</td></li>
        <li class="list-group-item"><th>Rating: </th><td>{{$opera->ratings}}</td></li>
        </ul>
        <div class="card-footer row g-2">
            <div class="col">
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
@endsection
