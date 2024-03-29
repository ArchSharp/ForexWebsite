@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Risk management</h4>
    <div class="col justify-content-start text-left">
        <p>
            This is one of the most important part of forex trading. You need to know how to manage risk else you will be gambling ifyou don't. 
            The hard truth is that loosing is part of the game. When any forex said he made money this weekor this month, it does not mean he did not lose in-between 
            The money he is saying he made is made in a long-run. Don't learn to trade forex with a get-rich-quick mindset, it is a dangerous path many people who have thread this path 
            lost their whole investment, some was arrested, etc.

            <h5>Rules of risk management</h5>

            <ol>
                <li>
                    Never risk more than one percent on one trade. If your Balance/Capital is less than or equal to $100 always use 0.01 on a trade, If greater than $150 and less than or equal to $200 use 0.02, etc.
                </li>
                <li>We recommend that your risk-to-reward ratio be 3:1, i.e if your TakeProfit (Tp) is 30 pips then your StopLoss (Sl) should be 10 pips, if Tp is 45 pips Sl should be 15 pips, etc.
                    You can also use 1:2, if Tp is 30 pips Sl should be 15 pips, if Tp is 45 pips Sl should be 23 pips (approximate value of 22.5 pips).
                </li>
            </ol>
        </p>
        
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page23') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page25') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection