@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
  <h2 class="text-primary fw-bold">Beginners Class</h2>
  <h4>What is Forex?</h4>
  <div class="col justify-content-center text-center">
    <p>Forex derive its name from "Foreign" and "Exchange". It is an international market where currencies (such as $, €, £, ¥, etc)
       are bought and sold against each other, it is the largest financial market in the world. Forex market opens 24 hours per day and 5 days per week
       <b class="text-success fw-bolder">$6.6 TRILLION</b> is pumped into forex market every day, it is from these people make money.
      </p>
    <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
    </iframe> -->
  </div>
  <p>
      <div class="container-fluid">
      <div class="row justify-content-between">
          {{-- <div class="col-1">
          <a class="bg-light text-decoration-none text-start fw-bold" href="#">Prev</a>
          </div> --}}
          <div class="col-1">
          <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page2') }}">Next</a>
          </div>
      </div>
      </div>
  </p>
</div>
@endsection