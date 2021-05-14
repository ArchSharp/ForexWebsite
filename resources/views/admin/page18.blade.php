@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Chart Indicators</h4>
    <div class="col justify-content-start text-left">
        <p>
            Indicators are tools that can assist in analyzing the market before buying/selling an asset. Chart indicators are of two classes.
            <ul>
                <li>Lagging indicators or trend-following indicators</li>
                A lagging indicator gives a signal after the trend or reversal has started. Leading indicators typically work by measuring how “overbought” or “oversold” something is. 
                It is bestto use lagging indicators. Examples of Lagging indicators are RSI, Stochastic, MACD, etc.
                <li>Leading indicators or oscillators</li>
                A leading indicator gives a signal before the new trend or reversal occurs. They don’t warn you of any upcoming changes in prices though, they simply tell you what prices are doing (rising or falling) so that you can trade accordingly. 
                Examples of Lagging indicators are Moving averages.
            </ul>
            The general approach is that you should use lagging indicators during trending markets and leading indicators during sideways markets.
            
            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/candlestick.png") }}" alt="" style="width: 60%;">
            </div>

            <div class="container">
                <div class="row">
                    <div class="carousel-inner">
                        <div class="card-group">
                            <div class="card">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/macd.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-primary">MACD</h5>
                                <p class="card-text">It has a signal line and MACD bar. There is a line zero (0) division. When the signal line and MACD bar are above zero it can be viewed as uptrend has started, 
                                    when the signal line and MACD bar are below zero it can be viewed as downtrend has started. But don't take just that as a reason for executing a trade. 
                                </p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/rsi.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-primary">RSI</h5>
                                <p class="card-text">It has one line and three horizontal lines (line 30, 50 and 70), Traders beleive that uptrend has started when the blue line (it can be any color) crossed down and crossed up line 30, 
                                    Traders beleive that downtrend has started when the blue line (it can be any color) crossed up and crossed down line 70, But only this is not enough as a reason for executing a trade.
                                </p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/stoch.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-primary">Stochastic</h5>
                                <p class="card-text">It has two lines and two horizontal lines (line 20 and 80), Traders beleive that uptrend has started when the blue line (it can be any color) crossed down and crossed up line 20, 
                                    Traders beleive that downtrend has started when the blue line (it can be any color) crossed up and crossed down line 70, But only this is not enough as a reason for executing a trade.</p>
                            </div>
                            </div>
                        </div>

                        <div class="card-group mt-2">
                            <div class="card">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/Adx.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-primary">ADX</h5>
                                <p class="card-text">It has three lines and a horizontal line (line 25), Traders beleive that uptrend has started when the +Di line crossed up and -Di line crossed down line 25, 
                                    Traders beleive that uptrend has started when the -Di line crossed up and +Di line crossed down line 25, The ADX line is a volatility line, when ADX line is below 25, there is no volatility (another name will be "many traders or great force/speed") in the market,when ADX line is above 25,
                                     there is volatility in the market. Only this is not enough for executing a trade.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/MovAvg.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-primary">Moving average</h5>
                                <p class="card-text">It has one line and is displayed on the chart, Traders beleive that uptrend has started when price (represented by candlestick) crossed above the Moving average line, 
                                    Traders beleive that downtrend has started when price (represented by candlestick) crossed below the Moving average line. But only this is not enough as a reason for executing a trade.</p>
                            </div>
                            </div>
                            <div class="card ms-2 border">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <img class="card-img-top" src="{{ asset("../images/BB.png") }}" alt="Widget" style="width:100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-primary">Bolinger band</h5>
                                <p class="card-text">It has three lines and is displayed on the chart, Traders beleive that uptrend has started when price (represented by candlestick) crossed above the lower Bolinger line, 
                                    Traders beleive that downtrend has started when price (represented by candlestick) crossed below the Bolinger line. But only this is not enough as a reason for executing a trade.</p>
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
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page17') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page19') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection