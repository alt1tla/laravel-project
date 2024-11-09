@extends('layout')
@section('content')
    <section>
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Адрес
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$data['city']}}</li>
                <li class="list-group-item">{{$data['street']}}</li>
                <li class="list-group-item">{{$data['house']}}</li>
            </ul>
        </div>
    </section>
@endsection