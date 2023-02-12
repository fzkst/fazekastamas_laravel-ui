@extends('components/app')

@section('content')
    <div class="row">
        <h1>Gyümölcsök:</h1>
        <div class="gy-4">
            <a class="btn btn-outline-secondary ms-1 mb-4 fw-bold"  href="{{ url('/fruits/create') }}">Új gyümölcs felvétele</a>
        </div>
        @foreach ($fruits as $fruit)
            <div class="card gy-4 p-0 mx-auto" style="width: 22rem;">
                <div class="card-header">
                  {{$fruit->name}}
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><th>Color: </th><td>{{$fruit->color}}</td></li>
                  <li class="list-group-item"><th>Taste: </th><td>{{$fruit->taste}}</td></li>
                  <li class="list-group-item"><th>Weight: </th><td>{{$fruit->weight}}</td></li>
                  <li class="list-group-item"><th>Purschase date: </th><td>{{$fruit->purch_date}}</td></li>
                </ul>
                <div class="card-footer row g-2">
                    <div class="col">
                        <a href="{{ url('fruits/'.$fruit->id)}} "><button class="btn btn-outline-primary fw-bold">Megnéz</button></a>
                    </div>
                    <div class="col ms-3">
                        <a href="{{ url('fruits/'.$fruit->id.'/edit')}} "><button class="btn btn-outline-warning fw-bold">Módosítás</button></a>
                    </div>
                    <div class="col text-end">
                        <form action="{{ url('fruits/'.$fruit->id)}}" method="post">
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

