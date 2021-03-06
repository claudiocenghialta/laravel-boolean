@extends('layouts.app')
@section('title','Studenti')
@section('main')
    <div class="container">
        <div class="card-deck elenco-cards-studenti">
            @foreach ($data as $key => $student)
            <div class="card">
                <img src=" {{$student->img}} " class="card-img-top" alt=" {{$student->name}} ">
                <div class="card-body">
                <a href="{{route('Student.show',['id'=>$student->id])}} "><h5 class="card-title"> (link id) {{$student->name}} ({{$student->anni}} ANNI)</h5></a>  
                <a href="{{route('Student.slug',['slug'=>$student->slug])}} "><h5 class="card-title"> (link slug) {{$student->name}} ({{$student->anni}} ANNI)</h5></a> 
                <h6 class="card-title"> {{($student->genere=='m')?'Assunto ': 'Assunta '}} da {{$student->azienda}} </h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection