@extends('layouts.app')


@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Agenzia Turistica</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore pariatur est magni ratione fugiat nam culpa adipisci molestiae commodi nesciunt.</p>
        <hr class="my-2">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Visit more...</a>
        </p>
    </div>
</div>

<section class="container">

<h4>Our facilities</h4>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eum atque doloribus similique dolor, optio sed repudiandae nihil ullam quasi?</p>


<div class="row gap-1 text-center justify-content-center mt-5 p-5">

    @foreach ($viaggi as $viaggio)

    <div class="col card">
        <img class="img-fluid" src="{{ $viaggio->image }}" alt="">
        <h3>{{ $viaggio->price }}</h3>
        <h4 class="text-success fw-bolder">{{ $viaggio->place }}</h4>
        <h5>duration: <br>{{ $viaggio->duration }}</h5>
        <p> {{ $viaggio->residence_type }}</p>
        <h5> type:  {{ $viaggio->travel_style }}</h5>
        <p> by: {{ $viaggio->tour }} </p>
    </div>

    @endforeach

</div> 

</section>

@stop