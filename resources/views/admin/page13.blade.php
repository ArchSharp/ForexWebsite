@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Video Recap</h4>
    <div class="col justify-content-start text-left">
        <p>
            <div class="container">
                <div class="row">
                    <div class="carousel-inner">
                        <div class="card-group">
                            <div class="card">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                {{-- <img class="card-img-top" src="{{ asset("../images/inverted-hammer.png") }}" alt="Widget" style="width:100%; height: 100%;"> --}}
                                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                                <iframe style="width:100%;" height="480" src="https://www.youtube.com/embed/RlOZeRlhvVM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Inverted Hammer</h5>
                                    <p class="card-text">It is called inverted hammer because this time the upper wick is longest, while the lower wick is short.
                                        It indicates a buying pressure, followed by a selling pressure that was not strong enough to drive the market price down. Inverted hammer suggests that buyers will soon have control of the market.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-group mt-5">
                            <div class="card">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/evening-star.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Evening-Star</h5>
                                    <p class="card-text">This candlestick is formed by three-candlestick pattern, it is the equivalent of the bullish morning star. It is formed of a short candle sandwiched between a long green candle and a large red candlestick.
                                        It signals the reversal of an uptrend, and is particularly strong when the third candlestick erases the gains of the first candle.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-group mt-5">
                            <div class="card">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/bullish-engulfing.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Bullish Engulfing</h5>
                                    <p class="card-text">This pattern is formed by two candlesticks. The first candle is a short red body that is completely engulfed by a larger green candle.
                                        Though the second day opens lower than the first, the bullish market pushes the price up, culminating in an obvious win for buyers.</p>
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
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page12') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page14') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection