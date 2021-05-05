@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Brokers</h4>
    <div class="col justify-content-start text-left">
        <p>
            As we mentioned earlier, it is not possible to trade the forex market with $100 and not even with $1,000. Brokers are
             are Forex Company who have made it possible for any trader to trade with as small as $50 (yes i mean $50). That is the 
             lame man explanation of a broker with no complications. <br> <br>
            <span class="text-primary fw-bold">Types of Brokers</span>

        </p>

        <ul>
            <li>Dealing Desk (DD)</li>
            Dealing Desk brokers are also called Market Makers. Market makers, as their name suggests, “make” or set their own bid and ask prices themselves. 
            You can also see <span class="text-primary fw-bold">Dealing desk</span> as Brokers who have a <span class="text-primary fw-bold">desk</span> where they deals (but not in harmfull way) with the trade of their clients.
            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/dealing-desk.png") }}" alt="" style="width: 50%;">
            </div> <br>
            From this image, If you (Fx trader or brokers client) placed a trade from your device (Laptop/Mobile phone), DD Brokers will look at the trade and if the brokers sees the potential of your trade as a loosing trade 
            DD brokers will take the opposite (if you buy they will sell, if you sell they will buy) side of your trades so that if at the end you lost (closed in loss) the trade whatever amount you lost in -$x.yz (loss) goes to them in +$x.yz (profit). <br>
            <span class="fw-bold text-success"> Note: Don't see this as wickedness, if they they don't take the oppsite side, and you still lost the trades, your lost money goes to the forex market as profit.
            Taking opposite side is just a an additional way for them to also make money, don't forget they are doing business and every business always look for a way to make money.</span> <br>
            Check above image for <span class="text-primary fw-bold">Liquidity Provider</span>, they are another Forex company that provide rates (market prices) available to brokers.
            <li>No Dealing Desk (NDD)</li>
            NDD do not take the other side of their clients’ trade as they simply link two parties together.
            You can also see <span class="text-primary fw-bold">No Dealing desk</span> as Brokers who have no <span class="text-primary fw-bold">desk</span> where they deals with the trade of their clients.
            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/no-dealing-desk.png") }}" alt="" style="width: 50%;">
            </div> <br>
            There aretwo types of NDD Brokers:
            <ul>
                <li>STP Brokers</li>
                STP (Straight through processing) are Forex brokers that have an STP system that takes/route the orders of their clients directly to their liquidity providers who have access to the interbank market.
                <li>STP+ECN Brokers</li>
                True ECN (Electronic Communication Network) forex brokers, on the other hand, allow the orders of their clients to interact with the orders of other participants (such as banks, retail traders, hedge funds, and even other brokers) in the ECN.
                In essence, participants trade against each other by offering their best bid and ask prices.
                ECNs also allow their clients to see the “Depth of Market.”
                Depth of Market displays where the buy and sell orders of other market participants are.
            </ul> <br>
            In summary, <br>
            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset("../images/graduation-brokers.png") }}" alt="" style="width: 40%;">
            </div> <br>
            <table class="table table-responsive caption-top">
                <caption><span class="fs-4">DD Vs NDD Brokers</span>  - These are the major difference between these two brokers</caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Dealing Desk <br>(Market Maker)</th>
                    <th scope="col">No Dealing Desk <br>(STP)</th>
                    <th scope="col">No Dealing Desk <br>(STP+ECN)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Fixed Spreads</td>
                    <td>Most have variable spreads</td>
                    <td>Variable spreads or commission fees</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Take the opposite side of your trade</td>
                    <td>Simply a bridge between client and liquidity provider</td>
                    <td>A bridge between client and liquidity provider and other participants</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Artificial quotes</td>
                    <td>Prices come from liquidity providers</td>
                    <td>Prices come from liquidity providers and other ECN participants</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Orders are filled by broker on a discretionary basis</td>
                    <td>Automatic execution, no re-quotes</td>
                    <td>Automatic, no re-quotes</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td></td>
                    <td></td>
                    <td>Displays the Depth of Market (DOM) or liquidity information</td>
                  </tr>
                </tbody>
              </table>
        </ul>
        <span class="text-primary fw-bold">Note : </span> All Brokers makes money from spread and/or commission, see row 1 in above table.
        
        <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
        </iframe> -->
    </div>
    <p>
        <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-1">
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page8') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page10') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection