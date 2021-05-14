@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Fundamental Analysis</h4>
    <div class="col justify-content-start text-left">
        <p>
            Fundamental analysis deals with the economic aspect of forex. All currencies such as Dollar, Euro, Japanese Yen, etc. belong to a country. 
            What determines the value of these currencies are the economic factors of the country in question. These factors are usually reveal during News release which can be found in 
            <a href="https://forexfactory.com" target="_blank">Forex Factory</a>. <br>
            There are many economic factors to look at but we will talk on the most important and explain how to interpret the data on <a href="https://forexfactory.com" target="_blank">Forex Factory</a>. 
            The most important economic data to watch for include:
            <ul>
                <li>Interest Rates</li>
                A currency’s interest rate is probably the biggest factor in determining the perceived value of a currency. 
                Generally, higher interest rates increase the value of a given country's currency while lower interest rates decrease the value of a given country's currency. The higher interest rates that can be earned tend to attract foreign investment, increasing the demand for and value of the home country's currency.
                <li>Inflation</li>
                Inflation is a steady increase in the prices of goods and services. Higher inflation reduces the value of a country's currency while lower inflation reduces the value of a country's currency.
                <li>GDP (Gross Domestic Product)</li>
                <li>Employment Data</li>
                Employment data includes Unemployment and employment rate.
            </ul>
            Fundamental analysis is a valuable tool in estimating the future conditions of an economy, but not so much for predicting currency price direction. But whenever the data for 
            economic factors are released, there is usually a very fast or slow reaction in forex market to this News release.
            <br> <br>
            <h5>How to interpret <a href="https://forexfactory.com" target="_blank">Forex Factory</a> data</h5> <br>
            
            <div class="container">
                <div class="row">
                    <div class="carousel-inner">
                        <div class="card-group">
                            <div class="card">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                <img class="card-img-top" src="{{ asset("../images/high.png") }}" alt="Widget" style="width:100%; height: 100%;">
                                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                                <div class="card-body">
                                    <h5 class="card-title fw-bold"><span style="color: red;">High</span>, <span style="color:chocolate;">Medium</span>, and <span style="color:yellow;">Low</span> impact, <span style="color:grey;">Holidays</span> </h5>
                                    <p class="card-text">We have three types of impact, 
                                        <ul>
                                            <li><span class="fw-bold" style="color: red;">High</span> impact</li>
                                            When News with high impact are released, it usually have the highest volatility (in other words "great force/speed") in the market.
                                            <li><span class="fw-bold" style="color:chocolate;">Medium</span> impact</li>
                                            When News with medium impact are released, it usually have the high volatility second to high impact in the market.
                                            <li><span class="fw-bold" style="color:yellow;">Low</span> impact</li>
                                            When News with low impact are released, it usually have the lowest volatility in the market.
                                        </ul>
                                        and three types of values,
                                        <ul>
                                            <li>Actual value</li>
                                            This is the most recent value, when the value is released in red color it means the news for that currency is a bad one, 
                                            when the value is released in green color it means the news for the currency is a good one.
                                            <li>Forecast value</li>
                                            This is the most recent value, This does not have a significant effect, it is a collective view/prediction of the economist about a currency.
                                            <li>Previous value</li>
                                            This is the last value that was released for the news of the currency in question.
                                        </ul>
                                        What you are checking here is </p>
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