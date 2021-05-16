@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Sentimental Analysis</h4>
    <div class="col justify-content-start text-left">
        <p>
            Since every forex trader always have an opinion about the market, this analysis focuses on the combined opinion of the majrity of forex traders. 
            These majority usually submit their opinion about every assets (or currency pairs). The question is how do I know/can I find the data that tells me the opinion of the majority in Forex. 
            The answer to that is <a href="https://www.cftc.gov/" class="text-success fw-bold" target="_blank">Commitment of Traders</a>.
            <span class="fw-bold">Commitment of Traders</span> is a data report that is usually reported by those majority on every Wednessday and released to the general public on Friday. There are two websites where you can get this report from: 
            <ul>
                <li><a href="https://www.cftc.gov/" class="text-primary fw-bold" target="_blank">CFTC</a></li>
                <li><a href="https://www.tradingster.com/" class="text-primary fw-bold" target="_blank">Tradingster</a></li>
                We are recommending to use Tradingster because of the well-structured presentation of those datas.
            </ul>
            <div class="container">
                <div class="row">
                    <div class="carousel-inner">
                        <div class="card-group">
                            <div class="card">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/cot2.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-primary">COT</h5>
                                    <p class="card-text">After clicking on <a href="https://www.tradingster.com/" class="text-primary fw-bold" target="_blank">Tradingster</a> scroll down a litlle on their websites 
                                    you will see above table containing Currencies, COT legacy, and COT. Click on COT legacy of any currency you want to see its COT data.</p>
                                </div>
                            </div>
                            <div class="card ms-2 border">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/cot1.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-primary">COT</h5>
                                    <p class="card-text">For example, we clicked on COT legacy for EURO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <br>
            According to the COT data, there are three types of traders:
            <ul>
                <li>Commercial traders (Hedgers)</li>
                These are mega (big) businesses that use currency futures to hedge and protect themselves from too much exchange rate fluctuation. <br>
                One key characteristic of hedgers is that they are most bullish at market bottoms and most bearish at market tops.
                <li>Non-commercial traders (Large Speculators)</li>
                This is a mixture of individual traders, hedge funds, and financial institutions. These are traders like you and I who are looking to trade for speculative gains.
                <li>Retail traders (Small Speculators) or Non-reportable traders</li>
                The number of open interest positions that do not meet the reportable requirements of the CFTC like retail traders.
            </ul> 
                <span class="fw-bold">Since commercial are always found at the extreme to or bottom of the market, speculative positioning indicates trend direction while commercial positioning could signal reversals. <br>
                    The basic rule is this: every market top or bottom is accompanied by a sentiment extreme, but not every sentiment extreme results in a market top or bottom. This means we will look at commercial data for last 3 or 4 weeks to present to see where 
                    there could be a major reversal.
                </span>
                <br>
            <br>
            <h5>Important notes</h5>
            After Commercial traders have caused a major reverse, non-commercial traders will be doing opposite of what commercial traders are doing. Commercial traders will make sure non-commercial traders trade and break their price level. <br>
            For example, if commercial traders have caused a major reversal by buying, non-commercial will be selling. commercial traders will not allow the non-commercial traders to sell to break their price level where they started buying.
            <br> <br>
            <h5>How to use the COT data</h5>
            After reading above explanation, you will have to look at the numbers contained in the report. The numbers are the numbers of traders saying they want to buy or sell. 
            Long is another word for buy while Short is another word for sell, and spread is the difference between them.

        </p>
        
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page21') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page23') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection