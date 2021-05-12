@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Trend and Trend channels</h4>
    <div class="col justify-content-start text-left">
        <p>
            Trend is particular move in the forex market, There are three types trends and we can only have one trend at a time.
            <ul>
                <li>Uptrend</li>
                <li>Downtrend</li>
                <li>Sideways trend</li>
            </ul>
            <h5>How to identify a Trend in forex market</h5>
            It can be identified by drawing a diagonal line. Two or Three tops/bottoms of candle must touch the drawn diagonal line before you can call it a trend line. 
            The tops and bottoms that must touch the trend line must be significantly separated.

            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/trendline.png") }}" alt="" style="width: 60%;">
            </div> <br>

            <h5>How to draw/identify a Trend channels in forex market</h5>
            Just like trend, we also have three types of trend channel, 
            It can be identified by drawing a diagonal line. Two or Three tops/bottoms of candle must touch the drawn diagonal line before you can call it a trend line. 
            The tops and bottoms that must touch the trend line must be significantly separated.

            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/trendline.png") }}" alt="" style="width: 60%;">
            </div> <br>
        </p>
        
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page15') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page17') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection