@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Support and Resistance</h4>
    <div class="col justify-content-start text-left">
        <p>
            Support and resistance is one of the most widely and powerful concepts in forex trading. 
            <ul>
                <li>Resistance levels indicate where there will be a surplus of sellers. Sellers are always at the top, it means anytime you sell any currency pair 
                    what you are simply saying is you are expecting the currency pair to fall (in other words, when you sell you are expecting the Market to start coming down).
                </li>
                <li>Support levels indicate where there will be a surplus of buyers. Buyers are always at the bottom, it means anytime you buy any currency pair 
                    what you are simply saying is you are expecting the currency pair to rise (in other words, when you buy you are expecting the Market to start going up).
                </li>
            </ul>
            <h5>How to identify a true Support and Resistance</h5>
            <i class="fa fa-skull-crossbones text-danger fs-3" aria-hidden="true"></i> It is not a support just because you think market has fell significantly neither is it a reesistance 
            just because you think market has rise significantly. <i class="fa fa-skull-crossbones text-danger fs-3 text-success" aria-hidden="true"></i> <br>

            <i class="fa fa-check-square fs-3 text-success" aria-hidden="true"></i> It is a support if the bottom of 3 to 4 or more candles are touching a particular market price and refuse to break the price downward. It is a Resistance if the top of 3 to 4 or more candles are touching a particular market price and refuse to break the price upward.<i class="fa fa-check-square fs-3 text-success" aria-hidden="true"></i> <br>
            Note: The more the candles that are touching a particular markets indicates the stronger the resistance or support.
            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/S-R.png") }}" alt="" style="width: 70%;">
            </div> <br>
        </p>
        
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page14') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page16') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection