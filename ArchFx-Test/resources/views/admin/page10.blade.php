@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Factors: Broker Selection</h4>
    <div class="col justify-content-start text-left">
        <p>
            These are the most important factor to consider before choosing your preferred broker, information that will sheild/protect you from Scammers (some brokers are scammers) 
            is explained below.
        </p>
        <ul>
            <li class="text-primary fw-bold">Regulations</li>
            This is the first thing you will want to check about a broker, always make sure the broker on your mind is regulated before trading with them, <span class="text-danger fw-bold">never trade with an unregulated broker </span>. 
            <span class="text-primary fw-bold">Regulated</span> means a broker is registered under a regulatory agency, all regulated broker usually put their registration number either at the top or bottom of their website so always check for this. 
            If a broker is regulated, it means you are safe trading with them to a higher extent (highly secure). But If a broker is not regulated, most likely that broker is a scammer/fake broker. Some of the regulatory agencies includes <a href="#">CFTC</a> and <a href="#">NFA</a>, <a href="#">FCA</a> and <a href="#">PRA</a>, <a href="#">ASIC</a>, 
            and etc.
            <li class="text-primary fw-bold">Cost of Transaction</li>
            Anytime you trade the forex market, you will have to pay for either the spread or a commission so it is only natural to look for the most affordable and cheapest rates (market prices).
            Sometimes you may need to sacrifice low transactions for a more reliable broker, but never sacrifice a reliable broker for low transaction cost.
            <li class="text-primary fw-bold">Fast Deposits and Withdrawal</li>
            A good forex brokers will allow you to deposit funds and withdraw your earnings with speed and without stress. For the good brokers, anytime you experience delay in deposit or withdrawal, most likely, you may be having problem with your credit card details, etc.
            <li class="text-primary fw-bold">Trading Platform</li>
            In forex trading, trading activity usually happens through the brokers’ trading platform called MT4/MT4/CTrader. This means that the trading platform of your broker must be user-friendly and stable.
            <li class="text-primary fw-bold">Execution Speed</li>
            This is the speed at which your orders are accepted by your broker.
            <li class="text-primary fw-bold">Customer Service</li>
            You want to pick a broker you can quickly and easily get a reasonable response from anytime you contact them through their support department. 
            Forex brokers may be kind and helpful during the account opening process but have terrible “after-sales” support.
        </ul>
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page9') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page11') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection