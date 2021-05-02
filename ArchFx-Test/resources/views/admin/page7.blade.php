@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Forex Trading Time (or Session)</h4>
    <div class="col justify-content-start text-left">
        <p>
            Fx Trading session are session that Traders in the specified region tends to actively trade, rather than attempt to trade the markets 24 hours per day.
        </p>
        <div class="d-flex justify-content-center mt-3">
            <img src="{{ asset("../images/forex-session-times.jpg") }}" alt="" style="width: 70%;">
        </div>
        From the picture, we have four major trading session, the most active time to trade is London and Newyork session. So find out your country GMT to know the 
        exact time these GMTs are in your Country's local time. Best day to trade during the week have be found to be Tuesday, Wednessday, and Friday.
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page6') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page7') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection