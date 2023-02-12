@extends('components/app')

@section('content')
    <div>
        <div class="card mt-5" style="background-color: rgba(255, 236, 209, 0.311)">
            <form action="{{ url('fruits/'.$fruit->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h5>Gyümölcs módosítása</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <label class="form-label" for="name">Név:</label>
                        <input type="text" value="{{ $fruit->name }}" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="color">Szín</label>
                        <input type="text" value="{{ $fruit->color }}" class="form-control" name="color" value="{{ old('color') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="taste">Íz:</label>
                        <input type="text" value="{{ $fruit->taste }}" class="form-control" name="taste" value="{{ old('taste') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="weight">Súly:</label>
                        <input type="text" value="{{ $fruit->weight }}" class="form-control" name="weight" value="{{ old('weight') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="purch_date">Vásárlás dátuma:</label>
                        <input type="date" value="{{ $fruit->purch_date }}" class="form-control" name="purch_date" value="{{ old('purch_date') }}" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Módosít</button>
                </div>
            </form>
        </div>
    </div>
@endsection
