@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Divergence</h4>
    <div class="col justify-content-start text-left">
        <p>
            Divergence is a strategy used to know the most likely market movement before it happens, i.e used to know market direction ahead of other traders. 
            This isacheived by combining market price action and an Indicator movement. The Indicators that are mostly used are RSI, MACD, and Stochastic. we recommend using MACD<br>
            The best thing about divergences is that you’re usually buying near the bottom or selling near the top.
            There are two types of divergence,
            <ul>
                <li class="fw-bold">Regular divergence</li>
                It usually signal possible trend reversal.
                    <ul>
                        <li class="fw-bold">Regular bullish divergence</li>
                            If the price is making lower lows (LL), but the oscillator is making higher lows (HL), this is considered to be regular bullish divergence.
                            This normally occurs at the end of a DOWNTREND.
                        <li class="fw-bold">Regular bearish divergence</li>
                            if the price is making a higher high (HH), but the oscillator is lower high (LH), then you have regular bearish divergence.
                            This type of divergence can be found in an UPTREND.
                    </ul>
                <li class="fw-bold">Hidden divergence</li>
                It usually signal possible trend continuation.
                    <ul>
                        <li class="fw-bold">Hidden bullish divergence</li>
                            If the price is making lower lows (HL), but the oscillator is making higher lows (LL), this is considered to be hidden bullish divergence.
                            This normally occurs at the end of a UPTREND.
                        <li class="fw-bold">Hidden bearish divergence</li>
                            if the price is making a higher high (LH), but the oscillator is lower high (HH), then you have regular hidden divergence.
                            This type of divergence can be found in an DOWNTREND.
                    </ul>
            </ul>
            <div class="container">
                <div class="row">
                    <div class="carousel-inner">
                        <div class="card-group">
                            <div class="card">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/regbulDiv.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Regular Bullish Divergence</h5>
                                    <p class="card-text">Attach MACD Indicators to the chart, watch out for these pattern by checking the Indicator lines and market movement.</p>
                                </div>
                            </div>
                            <div class="card ms-2 border">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/regDiv.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Regular Bearish Divergence</h5>
                                    <p class="card-text">Attach MACD Indicators to the chart, watch out for these pattern by checking the Indicator lines and market movement.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-group mt-2">
                            <div class="card">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/hidbearDiv.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Hidden Bearish Divergence</h5>
                                    <p class="card-text">Attach MACD Indicators to the chart, watch out for these pattern by checking the Indicator lines and market movement.</p>
                                </div>
                            </div>
                            <div class="card ms-2 border">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/hidbulDiv.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Hidden Bullish Divergence</h5>
                                    <p class="card-text">Attach MACD Indicators to the chart, watch out for these pattern by checking the Indicator lines and market movement.</p>
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
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page19') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page21') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection