@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Forex Order Types</h4>
    <div class="col justify-content-start text-left">
        <p>
            Forex order is an order either to buy or sell an asset (Currency pairs can also be reffered to as asset). There are two types of Market orders:
        </p>
        <ul>
            <li class="text-primary fw-bold">Market Order</li>
            It is an order that you want to execute/carry out instantly at the current market price. Here, we have two types of orders:
            <ul>
                <li class="text-primary fw-bold">Buy</li>
                When you buy, you are hoping for the market to rise. If it does not, the trades will be reading negative but not a loss yet.
                It becomes a loss after you have closed the trade in negative (closing can be done manually or by setting stop loss). If it rise  according to your hope, then you are in <span class="text-success fw-bold">MONEY</span>
                <li class="text-primary fw-bold">Sell</li>
                When you sell, you are hoping for the market to drop/fall. If it does not, the trades will be reading negative but not a loss yet.
                It becomes a loss after you have closed the trade in negative (closing can be done manually or by setting stop loss). If it drop/fall according to your hope, then you are in <span class="text-success  fw-bold">MONEY</span>
            </ul>
            <li class="text-primary fw-bold">Pending Order</li>
            It is an order that you want to execute/carry out at a later time at the price you specify. 
            Note that the price you specify can only be price that is not the current market price. Here, we have four types of orders:
            <ul>
                <li class="text-primary fw-bold">Buy Limit</li>
                From below picture, Buy Limit are orders placed below market price.
                <li class="text-primary fw-bold">Sell Limit</li>
                From below picture, Buy Limit are orders placed above market price.
                <li class="text-primary fw-bold">Buy Stop</li>
                From below picture, Buy Limit are orders placed above market price.
                <li class="text-primary fw-bold">Sell Stop</li>
                From below picture, Buy Limit are orders placed below market price.
            </ul>

        Note: If you are confused, our video tutorial on this topics will explain clearer.

            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/mt42.png") }}" alt="" style="width: 100%;">
            </div>
        </ul>
        
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page4') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page6') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection