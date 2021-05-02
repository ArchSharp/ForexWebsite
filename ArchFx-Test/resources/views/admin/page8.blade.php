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
            or loss has been added to your current balance. Lets assume your Balance is $1,000.
            <li class="fw-bold text-primary">Unrealized Profit/Loss</li>
            Unrealized profit or loss are the profits or losses contained in the trades you have not closed. Lets assume your current running trades is having - $9.98.
            <li class="fw-bold text-primary">Realized Profit/Loss</li>
            Realized profits or losses are the profits or losses contained in the closed trades.
            <li class="fw-bold text-primary">Equity</li>
            Equity = <span class="fw-bold text-primary">Balance</span> + <span class="fw-bold text-primary">Unrealized Profit/Loss</span> <br>
            If your current trades are in loss, these losses are subtracted from your Balance. If your current trades are in profit, these profits are added to your Balance. <br>
            By above assumptions, Your Equity = $1,000 - $9.98 = $990.02<br>
            Note: Don't forget <span class="fw-bold text-primary">Unrealized Profit/Loss</span> is used, it means Equity will keep changing as <span class="fw-bold text-primary">Unrealized Profit/Loss</span> keeps changing.
            <li class="fw-bold text-primary">Margin</li>
            Margin = margin requirements x 100,000 x opening/entry price x lot size <br>
            margin requirements is gotten from your account leverage. If your leverage is 1:500, <br>
            margin requirements = 1 / 500 = 0.002 ( 0.2% ) <br>
            Assuming you entered 0.05 buy trade on EURUSD at 1.23053 <br>
            Margin = 0.002 x 100,000 x 1.23053 x 0.05 <br>
            Margin = $12.31 <br>
            Note Margin does not change until another trade is executed.
            <li class="fw-bold text-primary">Free Margin</li>
            Free margin = <span class="fw-bold text-primary">Equity</span> - <span class="fw-bold text-primary">Margin</span> <br>
            By above assumptions, Your Free marging will be = $990.02 - $12.31 <br>
            Free margin = $977.71
            <li class="fw-bold text-primary">Margin Level</li>
            Margin level = ( Equity / Margin ) x 100% <br>
            By all the above assumption, your current Margin level will be <br>
            Margin level = ( $990.02 / $12.31 ) x 100% = 8042.40%. <br>
            <span class="text-danger fw-bold">Read the last two carefully and make sure you understand what you read. </span><br>
            <li class="fw-bold text-primary">Margin Call</li>
            Many Traders don't usually pay attention to Margin call. Margin call is a specific percentage that if <span class="fw-bold text-primary">Margin Level</span>
            gets to, you should start to be more carefull not to open any trades, this percentage is usually contained in your account information on your broker website. 
            This percentage is a signal that you may lose more than 70% of your trading capital if the market continues in the current direction.
             But if the market reverse direction from the current direction, you may still have account recovered.  This percentage vary according to broker, but usually <span class="fw-bold text-primary">Margin Call</span> is around 60% - 100%.
            <li class="fw-bold text-primary">Stop Out</li>
            Stop out is also a percentage, but this time a <span class="text-danger fw-bold">death percentage </span>. If margin level gets to stop out percentage, 
            the broker will start closing your trades starting from the highest loss trades. This percentage vary according to broker, but usually stop out is around 30% - 50%.
            
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