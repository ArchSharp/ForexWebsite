@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Candlestick pattern</h4>
    <div class="col justify-content-start text-left">
        <p>
            Candlestick pattern usually form at a market price/level where market will most likely change direction. If you understand this definition, it simply means you don't 
            always need to pay attention to every candlestick pattern. Only pay attention to candlestick pattern at a support or resistance level in the market.
            
        </p>
        
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page16') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page17') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection