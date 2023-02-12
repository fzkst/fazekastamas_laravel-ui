@extends('components/app')

@section('content')
    <div>
        <div class="card mt-5" style="background-color: rgba(255, 236, 209, 0.311)">
            <form action="{{ url('fruits')}}" method="POST">
                @csrf
                @method('POST')
                <div class="card-header">
                    <h5>Új gyümölcs hozzáadása</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <label class="form-label" for="name">Név:</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="color">Szín</label>
                        <input type="text" class="form-control" name="color" value="{{ old('color') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="taste">Íz:</label>
                        <input type="text" class="form-control" name="taste" value="{{ old('taste') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="weight">Súly:</label>
                        <input type="text" class="form-control" name="weight" value="{{ old('weight') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="purch_date">Vásárlás dátuma:</label>
                        <input type="date" class="form-control" name="purch_date" value="{{ old('purch_date') }}" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Hozzáad</button>
                </div>
            </form>
        </div>
    </div>
@endsection
