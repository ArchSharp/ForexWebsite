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
                <img src="{{ asset("../images/Candlestick.jpg") }}" alt="" style="width: 60%;">
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
                                    <p class="card-text">It is called inverted hammer because this time the upper wick is longest, while the lower wick is short.
                                        It indicates a buying pressure, followed by a selling pressure that was not strong enough to drive the market price down. Inverted hammer suggests that buyers will soon have control of the market.</p>
                                </div>
                            </div>
                            <div class="card ms-2 border">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/hanging-man.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Hanging-Man</h5>
                                    <p class="card-text">This pattern is the bearish equivalent of a hammer pattern; it has the same shape but it forms at the end of an uptrend.
                                        It signals that there was a significant sell-off during the day, but that buyers were able to push the price up again. The large sell-off is often seen as an indication that the bulls are losing control of the market.</p>
                                </div>
                            </div>
                            <div class="card ms-2 border">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/hammer.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Hammer</h5>
                                    <p class="card-text">This candlestick pattern has a short body with a long lower wick, and is found at the bottom of a downward trend. <br>
                                        This candlestick pattern shows that although there were selling pressures during the day, ultimately a strong buying pressure drove the price back up. The colour of the body can vary, but green hammers indicate a stronger bull market than red hammers.</p>
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
                                    <p class="card-text">This candlestick is formed by three-candlestick pattern, it is the equivalent of the bullish morning star. It is formed of a short candle sandwiched between a long green candle and a large red candlestick.
                                        It signals the reversal of an uptrend, and is particularly strong when the third candlestick erases the gains of the first candle.</p>
                                </div>
                            </div>
                            <div class="card ms-2 border">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/shooting-star.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Shooting-Star</h5>
                                    <p class="card-text">This pattern has the same shape just as the inverted hammer, but it is formed in an uptrend: it has a small lower body, and a long upper wick.
                                        Usually, the market will gap slightly higher on opening and rally to an intra-day high before closing at a price just above the open – like a star falling to the ground.</p>
                                </div>
                            </div>
                            <div class="card ms-2 border">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/morning-star.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Morning-Star</h5>
                                    <p class="card-text">This candlestick pattern is usually considered a sign of hope in a market downtrend. It is composed of three-candlestick pattern: one short-bodied candle between a long red and a long green. usually, the ‘star’ will have no overlap with the longer bodies, as the market gaps both on open and close.
                                        It indicates that the selling pressure of the first day is dying, and a bull market is on the horizon.</p>
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
                                    <p class="card-text">This pattern is formed by two candlesticks. The first candle is a short red body that is completely engulfed by a larger green candle.
                                        Though the second day opens lower than the first, the bullish market pushes the price up, culminating in an obvious win for buyers.</p>
                                </div>
                            </div>
                            <div class="card ms-2 border">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/bearish-engulfing.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Bearish Engulfing</h5>
                                    <p class="card-text">This pattern occurs at the end of an uptrend. The first candle has a small green body that is engulfed by a subsequent long red candle.
                                        It indicates a peak or slowdown of price movement, and is a sign of an impending market downward movement. The lower the second candle goes, the more significant the likelyhood of the market downtrend.</p>
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