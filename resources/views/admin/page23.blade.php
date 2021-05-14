@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h2 class="text-primary fw-bold">Advance Class</h2>
    <h4 class="text-primary fw-bold">Correlation</h4>
    <div class="col justify-content-start text-left">
        <p>
            Correlation is a statistical measure of how two securities move in relation to each other. With Currency correlation, we can know when two currency
             pairs move in the same, opposite, or totally random direction, over some period of time.
            <br>
            <h5>How correlation is done</h5>
            Lets us pick USD, EUR, JPY and GBP.
            if we combine these curency in two(s) (i.e. in pairs) we wil have EURUSD, EURJPY, EURGBP, GBPUSD, GBPJPY, and USDJPY.
             We will now individually look at what is happening to these currencies. <br>
             Starting with USD. <br>
             Looking at USD we will look at currency pairs that has USD and they are EURUSD, GBPUSD and USDJPY. <br>
             if EURUSD is buying (i.e. going up) it means EUR is getting stronger against USD while USD is getting weaker against EUR. <br>
             if GBPUSD is buying (i.e. going up) it means GBP is getting stronger against USD while USD is getting weaker against GBP. <br>
             if USDJPY is buying (i.e. going up) it means USD is getting stronger against JPY while USD is getting weaker against JPY. <br>

             if we use "s" to represent stronger, it means we have 1s for USD. <br> But if USDJPY is selling it means USD is also weaker against JPY so we will be having 0s. Meaning USD is not stronger in any place, meaning USD is totally weak. 
             The same calculation goes for other currency, <br>
             <span class="fw-bold">Assignment : </span> How many "s" is EUR having if EURJPY, EURUSD are selling and EURGBP is buying? <br>

             <span class="text-primary fw-bold">Announcement</span> <br>
             We at ArchFxGlobe came up a custom indicator for the correlation. It will tell you the strongest currency on all timeframes. See Below picture. Contact us if you want a copy and it will be send to your email.
             <br> <br>
            <div class="container mt-1">
                <div class="row">
                    <div class="carousel-inner">
                        <div class="card-group">
                            <div class="card">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/correlation.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Correlation indicator</h5>
                                    <p class="card-text">Developed by <span class="text-primary fw-bold">ArchFxGlobe</span> Engineers</p>
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
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page20') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page22') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection