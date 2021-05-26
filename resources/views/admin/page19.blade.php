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
                            <img class="card-img-top" src="{{ asset("../images/inverted-hs.jpg") }}" alt="Widget" style="width:100%; height: 100%;">
                            {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Inverted Head and Shoulder</h5>
                                <p class="card-text">It usually happen toward the end of an downtrend, when the market has stretched in downward you can expect to see this pattern formed. But it does not happen everytime.
                                    Trade is usually taken after the price has moved above right shoulder.
                                </p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/dBot.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Double bottom</h5>
                                    <p class="card-text">It usually happen toward the end of an downtrend, when the market has stretched in downward you can expect to see this pattern formed. But it does not happen everytime.
                                        Trade is usually taken after the price has moved above Neckline.</p>
                                </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/headnshoulder.jpg") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Head and Shoulder</h5>
                                <p class="card-text">It usually happen toward the end of an uptrend, when the market has stretched in uptrend you can expect to see this pattern formed. But it does not happen everytime.
                                    Trade is usually taken after the price has moved below Neckline.</p>
                            </div>
                            </div>
                        </div>

                        <div class="card-group mt-2">
                            <div class="card">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/dTop.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Double top</h5>
                                <p class="card-text">It usually happen toward the end of an uptrend, when the market has stretched in uptrend you can expect to see this pattern formed. But it does not happen everytime.
                                    Trade is usually taken after the price has moved below Neckline.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/ascendingTriangle.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Ascending Triangle</h5>
                                <p class="card-text">It may happen anywhere in the market, it may also happen toward the end of an uptrend, when the market has stretched in an uptrend you can expect to see this pattern formed. But it does not happen everytime.
                                    Trade is usually taken after the price has break below triangle.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/descendingTriangle.jpeg") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Descending Triangle</h5>
                                <p class="card-text">It may happen anywhere in the market, it may also happen toward the end of a downtrend, when the market has stretched in downtrend you can expect to see this pattern formed. But it does not happen everytime.
                                    Trade is usually taken after the price has break above triangle.</p>
                            </div>
                            </div>
                        </div>

                        <div class="card-group mt-2">
                            <div class="card">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/symetricalTriangle.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Symetrical Triangle</h5>
                                <p class="card-text">It may happen anywhere in the market, it may also happen toward the end of an uptrend or downtrend, when the market has stretched in downtrend you can expect to see this pattern formed. But it does not happen everytime.
                                    Trade is usually taken after the price has break below or above the triangle.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/risenfallwedge.jpeg") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary fw-bold">Risng and Falling Wedge</h5>
                                <p class="card-text">Rising Wedge usually appears in a downtrend market while falling wedge appears in a uptrend. Both are a continuation of the 
                                    trend, the wedges are retracement.
                                </p>
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
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page18') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page20') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection