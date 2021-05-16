@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Market Analysis</h4>
    <div class="col justify-content-start text-left">
        <p>
            We mentioned in previous page that proper analysis needs to be done before placing a trade. This section talks about the different analysis 
            in Forex, and how to apply them. There are three types of FX analysis, and as to the question do i need to do the three analysis before placing a trade 
            the answer is <strong>YES</strong>.
        </p>
        <ul>
            <li class="text-primary fw-bold">Technical analysis</li>
            This analysis focus on study of price movement. The theory is that a trader can look at historical price movements and determine the current trading conditions and the next potential price movement.
            In the intermeidiate class, we will elaborate on this analysis, we will talk about <br>
            <ul>
                <li>Chart patterns</li>
                <li>Candlestick patterns</li>
                <li>Support and resistance</li>
                <li>Correlations</li>
                <li>Divergence</li>
                <li>Few of the Technical Indcators</li>
            </ul>

            <li class="text-primary fw-bold">Fundamental analysis</li>
            This analysis involves studying economic data reports and news headlines. 
            Fundamental analysis is a way of looking at the forex market by analyzing economic, social, and political forces that may affect currency prices. 
            In the intermeidiate class, we will elaborate on this analysis, in the mean time, <a href="https://forexfactory.com" target="blank">Forexfactory</a> is what we will use to explain what fundamental analysis is and 
            how it affect your trading.
            <li class="text-primary fw-bold">Sentimental analysis</li>
            This analysis is used to gauge how other traders feel, whether it’s about the overall currency market or about a particular currency pair. 
            <a href="https://www.cftc.gov/MarketReports/CommitmentsofTraders/index.htm" target="_blank">CFTC</a> website that contains the data report (called Commitments of Traders, COT) for sentimental analysis, it is usually reported on Wednessday but made available to the public on Friday. 
            Market sentiment analysis determines whether the market is bullish or bearish on the current or future fundamental outlook.
        </ul>
        <p>
            <h5>The Balance to the three analysis</h5>
            Fundamental factors shape sentiment, while technical analysis helps us visualize that sentiment and apply a framework to create our trade plans.
        </p>
        
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page11') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page13') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection