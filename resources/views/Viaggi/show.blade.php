@extends('layouts.app')


@section('content')

<div class="p-5 bg-dark">
    <div class="container">
        <h1 class="text-warning">Keep exploring</h1>
        <h6 class="text-white">esclusive vacanze in crociera e pacchetti per tour completi: non c’è limite alle nostre offerte di viaggio per farti scoprire le meraviglie del mondo!</h6>
    </div>
</div>
<div class="container p-4">
        <div class="row">
                <div class="col-6">
                    <img class="img-fluid" src="{{ $viaggio->image }}" alt="">
                </div>
                <div class="col-6 pt-3">
                    <h3>{{ $viaggio->price }}</h3>
                    <h4 class="text-success fw-bolder">{{ $viaggio->place }}</h4>
                    <h5>duration: {{ $viaggio->duration }} days</h5>
                    <p> {{ $viaggio->residence_type }}</p>
                    <h5> type:  {{ $viaggio->travel_style }}</h5>
                    <p> by: {{ $viaggio->tour }} </p>
                    <p>  {{ $viaggio->description }} </p>
                </div>
        </div>     
</div>

@stop