@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Forex Participants</h4>
    <div class="col justify-content-start text-left">
        <p>
            As the name suggest, the different types of people that participates in the forex market is an important topic to explained.
        </p>
        <div class="d-flex justify-content-center mt-3">
            <img src="{{ asset("../images/pre-school-fx-ladder.png") }}" alt="" style="width: 40%;">
        </div>
        <ul>
            <li class="fw-bold text-primary">Major Banks</li>
            Such as <span class="fw-bold text-success">Citi, JPMorgan, UBS, Barclays, Deutsche Bank, Goldman Sachs,  HSBC, and Bank of America.</span>
            These Banks are the ones that make the bid/ask spread that we all see on our chart.
            <li class="fw-bold text-primary">Medium-sized and small Banks</li>
            These are any commercial banks around you.
            <li class="fw-bold text-primary">Retail Market makers & Retails ECNs</li>
            These are the brokers that made forex market availbale to the retail traders.
            <ul>
                <li>Retail Market makers, as their name suggests, “make” or set their own bid and ask prices themselves.</li>
                <li>Electronic Communications Networks (ECN), who use the best bid and ask prices available to them from different institutions on the interbank market.</li>
            </ul>

            <li class="fw-bold text-primary">Retail traders</li>
            These are relatively small capital traders like you and I. Another name for retail traders is Currency speculators,  we buy and hold foreign currency in the hopes of selling 
            that currency at a higher exchange rate in the future or vice-versa.
        </ul>
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page6') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page8') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection