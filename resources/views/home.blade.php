@extends('components.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card h-100" style="width: 18rem">
                    <a href="/fruits"><img src="/img/gyumolcsok.jpg" alt="gyümölcsök" style="max-width: 100%"></a>
                    <div class="card-footer">
                        <span>Gyümölcsök</span>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card h-100" style="width: 18rem">
                    <a href="/operas"><img src="/img/operak.jpg" alt="operák" style="max-width: 100%"></a>
                    <div class="card-footer">
                        <span>Operák</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
