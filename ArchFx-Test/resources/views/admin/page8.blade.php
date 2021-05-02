@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Account Metrics and Meanings</h4>
    <div class="col justify-content-start text-left">
        <p>
            A metric is just a measurement of parameter/variable. Below are the account metrics to be discussed
        </p>
        <ul>
            <li class="fw-bold text-primary">Account Balance</li>
            Account Balance is your deposit plus any realized profit or loss. Realized in the sense that you have closed the trade and the profit 
            or loss has been added to your current balance.
            <li class="fw-bold text-primary">Unrealized Profit/Loss</li>
            Unrealized profit or loss are the profits or losses contained in the trades you have not closed.
            <li class="fw-bold text-primary">Realized Profit/Loss</li>
            Realized profits or losses are the profits or losses contained in the closed trades.
            <li class="fw-bold text-primary">Margin</li>
            Margin = margin requirements x 100,000 x opening/entry price x lot size <br>
            margin requirements is gotten from your account leverage. If your leverage is 1:500, <br>
            margin requirements = 1 / 500 = 0.002 ( 0.2% ) <br>
            Assuming you entered 0.05 buy trade on EURUSD at 1.23053 <br>
            Margin requirements = 0.002 x 100,000 x 1.23053 x 0.05 <br>
            Margin requirements = $ 12.31
            <li class="fw-bold text-primary">Used Margin</li>
            <li class="fw-bold text-primary">Free Margin</li>
            <li class="fw-bold text-primary">Margin Level</li>
            <li class="fw-bold text-primary">Margin Call</li>
            <li class="fw-bold text-primary">Stop Out</li>
            
        </ul>
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page7') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page9') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection