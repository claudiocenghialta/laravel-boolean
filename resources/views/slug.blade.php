@extends('layouts.app')
@section('title','Studente')
@section('main')
    <div class="container">
        <div class="card-deck elenco-cards-studenti">
            <div class="card">
                <img src=" {{$student['img']}} " class="card-img-top" alt=" {{$student['nome']}} ">
                <div class="card-body">
                <h5 class="card-title"> {{$student['nome']}} ({{$student['anni']}} ANNI)</h5>
                <h6 class="card-title"> {{($student['genere']=='m')?'Assunto ': 'Assunta '}} da {{$student['azienda']}} </h6>
                <p class="card-text"> {{$student['descrizione']}} </p>
                </div>
            </div>
        </div>
    </div>
@endsection