@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Chart Patterns</h4>
    <div class="col justify-content-start text-left">
        <p>
            Chart pattern is different from Candlestick pattern. Chart pattern requires 20 or more candles to form a chart pattern while candlestick pattern requires 2 - 3 candles to form a candlestick pattern. 
            Just like Candlestick pattern, Chart pattern usually form at a market price/level where market will most likely change direction or continue previous direction.
            
            <div class="container">
                <div class="row">
                    <div class="carousel-inner">
                        <div class="card-group">
                            <div class="card">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/inverted-hammer.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                            <div class="card-body">
                                <h5 class="card-title">Details</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/hanging-man.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Details</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/hammer.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Details</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                        </div>

                        <div class="card-group mt-2">
                            <div class="card">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/evening-star.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                            <div class="card-body">
                                <h5 class="card-title">Details</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/shooting-star.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Details</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/morning-star.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Details</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                        </div>

                        <div class="card-group mt-2">
                            <div class="card">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/bullish-engulfing.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                            <div class="card-body">
                                <h5 class="card-title">Details</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/bearish-engulfing.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Details</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page18') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection