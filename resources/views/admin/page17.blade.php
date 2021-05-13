@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Candlestick pattern</h4>
    <div class="col justify-content-start text-left">
        <p>
            Candlestick pattern usually form at a market price/level where market will most likely change direction or continue its previous direction. If you understand this definition, it simply means you don't 
            always need to pay attention to every candlestick pattern. Only pay attention to candlestick pattern at a support or resistance level in the market. <br>

            But before that, you need to know what a candlestick is. Candlestick is object that represent market price and its movement. Below image is a 
            is a typical candlestick.
            
            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/candlestick.jpg") }}" alt="" style="width: 60%;">
            </div>

            Green and Red are the typical color most people use to represent buy and sell candle. Green candle is a buy candle while red candle is a sell candle.
            Notice that the open for buy candle is down while close is up. The open for sell candle is up while close is down. Open, Close, High and Low are all price on the chart.
            <ul>
                <li>Open is the price where the candle starts from.</li>
                <li>Close is the price the candle close with.</li>
                <li>High and Low are price where market got to but did not close there.</li>
            </ul>

            <div class="container">
                <div class="row">
                    <div class="carousel-inner">
                        <div class="card-group">
                            <div class="card">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/inverted-hammer.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Inverted Hammer</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/hanging-man.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Hanging-Man</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/hammer.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Hammer</h5>
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
                                <h5 class="card-title text-primary fw-bold">Evening-Star</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/shooting-star.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Shooting-Star</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/morning-star.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Morning-Star</h5>
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
                                <h5 class="card-title text-primary fw-bold">Bullish Engulfing</h5>
                                <p class="card-text">Few informations such as drawdown and current ROI% can be seen in above image, all informations you need to convince you about the profitability can be seen by clicking "See Results", it will take you MyFxBook.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/bearish-engulfing.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Bearish Engulfing</h5>
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