@extends('layouts.app')


@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h2 class="display-3 fw-bolder">Agenzia Turistica</h2>
        <h6 class="lead text-primary">Discover experiences & tours</h6>
        <hr class="my-2">
        <p class="lead">
            <a class="btn btn-warning btn-lg" href="Jumbo action link" role="button">Visit more...</a>
        </p>
    </div>
</div>

<section class="container">

    <h4>Our facilities</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eum atque doloribus similique dolor, optio sed repudiandae nihil ullam quasi?</p>


    <div class="row gap-1 text-center justify-content-center  p-5">

        @foreach ($viaggi as $viaggio)

        <div class="col card">
            <img class="img-fluid" src="{{ $viaggio->image }}" alt="">
            <h3>{{ $viaggio->price }}</h3>
            <h4 class="text-success fw-bolder">{{ $viaggio->place }}</h4>
            <h5>duration: {{ $viaggio->duration }} days</h5>
            <p> {{ $viaggio->residence_type }}</p>
            <h5> type:  {{ $viaggio->travel_style }}</h5>
            <p> by: {{ $viaggio->tour }} </p>
            <p>  {{ $viaggio->description }} </p>
        </div>

        @endforeach

    </div> 

</section>

@stop