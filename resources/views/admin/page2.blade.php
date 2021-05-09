@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
  <div class="col justify-content-center text-center">
    <p>
      <div class="table-responsive">
        <table class="table caption-top">
            <caption><span class="fs-4">Major Currencies</span>  - These are the major currencies in the Forex market</caption>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Code</th>
                <th scope="col">Country</th>
                <th scope="col">Currency</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>USD</td>
              <td>United States</td>
              <td>Dollar</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>EUR</td>
              <td>Euro Zone</td>
              <td>Euro</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>GBP</td>
              <td>Great British</td>
              <td>Pound</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>JPY</td>
              <td>Japan</td>
              <td>Yen</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>AUD</td>
              <td>Australia</td>
              <td>Dollar</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>CAD</td>
              <td>Canada</td>
              <td>Dollar</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>CHF</td>
              <td>Switzerland</td>
              <td>Franc</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>NZD</td>
              <td>New Zealand</td>
              <td>Dollar</td>
            </tr>
          </tbody>
        </table>
      </div>
    </p>
    <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
    </iframe> -->
  </div>
  <p>
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="col-1">
          <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('admin.dashboard') }}">Prev</a>
        </div>
        <div class="col-1">
          <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page3') }}">Next</a>
        </div>
      </div>
    </div>
    </p>
</div>
@endsection