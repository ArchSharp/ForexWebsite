@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Forex Terminologies</h4>
    <div class="col justify-content-start text-left">
        <p>
            The following terms are the common terms you will have know always when trading the Forex market.
        </p>
        <ul>
            <li class="fw-bold text-primary">How to read cuurency pairs</li>
            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/base-and-quote-currency.png") }}" alt="" style="width: 250px;">
            </div>
                <p class="mt-3">
                    You will always see currency in pairs (i.e two currency combined together) in forex market. If above currency pair is rising, it means 
                    <span class="text-primary fw-bolder">GBP</span> is getting stronger while <span class="text-success fw-bolder">USD</span>
                    is getting weaker, if the pair is falling, it means <span class="text-primary fw-bolder">GBP</span> is getting weaker while 
                    <span class="text-success fw-bolder">USD</span> is getting stronger. <br>
                    So if you are buying a currency pair you are buying the <span class="text-primary fw-bolder">base currency</span> and selling the <span class="text-success fw-bolder">quote currency, </span>
                    if you are selling a currency pair you are selling the <span class="text-primary fw-bolder">base currency</span> and buying the <span class="text-success fw-bolder">quote currency.</span>
                </p>
            <li class="fw-bold text-primary">Long and Short</li>
            Long (or longing) is another word for buy (or buying), while Short is another word for sell (or selling).
            <li class="fw-bold text-primary">Bid, Ask and Spread</li>
            <span class="fw-bold">Bid</span> and <span class="fw-bold">Ask</span> are market prices that can be seen on the FX market. Bid is the price at which your broker (will be discussed later) is willing to buy the base currency in exchange for the quote currency.
            Anytime you placed sell trade your sell trade will be placed at the current bid price. Ask is the price at which
             your broker will sell the base currency in exchange for the quote currency. Anytime you placed buy trade your buy trade will be placed at the current ask price. <br>
             <span class="fw-bold">Spread</span> is the difference (or interval, or distance) between Bid and Ask prices. <br>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset("../images/bid-ask-spread.gif") }}" alt="" style="width: 400px;">
                        </div>
             <li class="fw-bold text-primary">Pips</li>
             <span class="fw-bold">Pips</span> <br> In market prices, there is 5 (e.g 1.10987) and 4 digits (e.g 1.1098) price mostly seen in many pairs.
             For the 5 digits price, the last digit is called <span class="fw-bold">Pipettes or points or fractional pips</span>, for the 4 digits there is no <span class="fw-bold">Pipettes or points or fractional pips</span>, 
             the last digit is called <span class="fw-bold">Pips</span>. <br>Also there are 3 (e.g 1.237) and 2 digits (e.g 1.23) mostly seen in Japanese yen pairs. What applies to 5 and 4 digits 
             also applies here, 3 digits has <span class="fw-bold">Pipettes or points or fractional pips</span> while 2 digits doe not have <span class="fw-bold">Pipettes or points or fractional pips</span> <br>
             
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-center mt-3">
                        <img src="{{ asset("../images/pip-cheat-sheet-forex.png") }}" alt="" style="width: 400px;">
                     </div>
                     <div class="col d-flex justify-content-center mt-3">
                        <img src="{{ asset("../images/pip-cheat-sheet-forex2.png") }}" alt="" style="width: 400px;">
                     </div>
                </div>
            </div>
            <li class="fw-bold text-primary">Lot size ( or volume )</li>
            Lot is the number of currency units you want to buy or sell. In numbers, one lot is equal to 100,000 units ( 1.00 lot = 100,000 units ).
            In Meta Trader 4 and 5 (shall be discussed later), lot is represented in decimals such 0.01, 0.1, 1.0,  2.0, e.t.c. <br>
            If you are buying/selling using 0.01 you are buying/selling 1,000 units (i.e 0.01 x 100,000) of whatever the currency pair you are trading at that time.
            Similarly, buying/selling using 0.1 means you are buying/selling 10,000 units (i.e 0.1 x 100,000). <br>
            How many units are you buying using 1.0 lot? (its 100,000 ofcourse).
            <li class="fw-bold text-primary">Leverage</li>
            To simply put, leverage is what makes traders with small capital able to trades forex market, 
            your broker is doing the background support for you to be able to trade with small capital. Without brokers, you cannot trade the forex market with $100 not 
            even to talk of $1,000, So you should be thanking God for providing brokers to us.
            <div class="col d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/mt4.png") }}" alt="" style="width: 90%;">
            </div>

        </ul>
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page3') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page5') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection