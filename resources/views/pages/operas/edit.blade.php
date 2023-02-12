@extends('components/app')

@section('content')
    <div>
        <div class="card mt-5" style="background-color: rgba(255, 236, 209, 0.311)">
            <form action="{{ url('operas/'.$opera->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h5>Opera módosítása</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <label class="form-label" for="name">Név:</label>
                        <input type="text" value="{{ $opera->name }}" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="country">Ország:</label>
                        <input type="text" value="{{ $opera->country }}" class="form-control" name="country" value="{{ old('country') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="city">Város:</label>
                        <input type="text" value="{{ $opera->city }}" class="form-control" name="city" value="{{ old('city') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="const_time">Építés dátuma:</label>
                        <input type="date" value="{{ $opera->const_time }}" class="form-control" name="const_time" value="{{ old('const_time') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="seats_count">Férőhelyek száma:</label>
                        <input type="text" value="{{ $opera->seats_count }}" class="form-control" name="seats_count" value="{{ old('seats_count') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="ratings">Értékelés:</label>
                        <input type="text" value="{{ $opera->ratings }}" class="form-control" name="ratings" value="{{ old('ratings') }}" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Módosít</button>
                </div>
            </form>
        </div>
    </div>
@endsection
