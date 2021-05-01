@extends('layouts/pagestemplate.template')
@section('content')
  <h4 class="text-primary fw-bold">Currency Pairs</h4>
  <div class="col justify-content-start text-center">
    <p>
        Forex currencies are always traded in pairs (i.e. buying/selling of a currency against another currency), 
        e.g EURUSD is a currency pair (i.e EUR + USD = EURUSD).
    </p>
    
    <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
    </iframe> -->
  </div>
  <div class="justify-content-start text-left">
    There are three classes of currency pairs:
    <ul>
        <li class="fw-bold text-primary">Major Currency Pairs</li>
            These are currency pairs that have USD  combined with any of the eight currencies listed on <a class="text-secondary" href="{{ route('page2') }}">Page 2</a>.
            These are the most traded currency pairs in the forex market. They are EURUSD, GBPUSD, USDJPY, NZDUSD, AUDUSD, USDCAD, and USDCHF.
        <li class="fw-bold text-primary">Minor Currency Pairs</li>
        These are currency pairs that has no USD combined with any of the eight currencies listed on <a class="text-secondary" href="{{ route('page2') }}">Page 2</a>. 
        They are also majorly traded but not as much as Major Currency Pairs, see their list below,<br>
        EURCHF EURGBP EURCAD EURAUD EURNZD EURSEK EURNOK GBPCHF GBPAUD GBPCAD GBPNZD <br>
        EURJPY GBPJPY CHFJPY CADJPY AUDJPY NZDJPY  .....e.t.c
        <li class="fw-bold text-primary">Exotic Currency Pairs</li>
        These currency pairs are made up of one major currency paired with the currency of a developing
         economy, such as Brazil, Mexico, Chile, Turkey, or Hungary. They are USDSAR (United States / Saudi Arabia), 
         USDSGD (United States / Singapore), USD/ZAR (United States / South Africa), .....e.t.c.
    </ul>
  </div>
  <p>
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="col-1">
          <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page2') }}">Prev</a>
        </div>
        <div class="col-1">
          <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page3') }}">Next</a>
        </div>
      </div>
    </div>
    </p>
@endsection