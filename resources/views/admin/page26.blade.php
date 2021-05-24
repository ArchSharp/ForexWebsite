@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Disclaimer</h4>
    <div class="col justify-content-start text-left">
        <p>
            Our Strategy is not a holy grail (i.e it is not 100%). We have carefully developed the strategy to make you a profitable forex trader 
            and using it is at your own risk, we take no responsibility for any loss or profit acquired.
        </p>
        
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page25') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page27') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection