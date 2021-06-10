@extends('layouts/pagestemplate.template')
@section('content')
<div class="section mb-5">
    <h4 class="text-primary fw-bold">Video Recap</h4>
    <div class="col justify-content-start text-left">
        <p>
            <div class="container">
                <div class="row">
                    <div class="carousel-inner">
                        <div class="card-group">
                            <div class="card">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                {{-- <img class="card-img-top" src="{{ asset("../images/inverted-hammer.png") }}" alt="Widget" style="width:100%; height: 100%;"> --}}
                                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                                <iframe class="d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block" style="width:100%;" height="480" src="https://www.youtube.com/embed/CVel0yi-uAo?list=PLhPsoJ0uzsOpDmfbtykbGpMJ3z36XjuVK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="text-center">
                                    <a class="d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none fw-bold" href="https://www.youtube.com" target="_blank">Forex Beginners</a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Summary</h5>
                                    <p class="card-text">Carefully watch this video, 
                                        <span class="d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none">
                                            Click the video link above it will take you to the <a href="#" class="text-primary fw-bold">Youtube</a> video, <span class="fw-bold text-primary">There is a bonus for those who subscribe, comment and like after watching the video</span>.
                                        </span>
                                        <span class="d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block">
                                            Go to <a href="https://www.youtube.com" target="_blank" class="text-primary fw-bold">Youtube</a> to subscribe, comment and like <span class="fw-bold text-primary">to qualify for a bonus</span> .
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-group">
                            <div class="card">
                                <!--<img src="..." class="card-img-top" alt="...">-->
                                {{-- <img class="card-img-top" src="{{ asset("../images/inverted-hammer.png") }}" alt="Widget" style="width:100%; height: 100%;"> --}}
                                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                                <iframe class="d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block" style="width:100%;" height="480" src="https://www.youtube.com/embed/CVel0yi-uAo?list=PLhPsoJ0uzsOpDmfbtykbGpMJ3z36XjuVK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="text-center">
                                    <a class="d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none fw-bold" href="https://www.youtube.com" target="_blank">Forex Beginners</a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">Summary</h5>
                                    <p class="card-text">Carefully watch this video, 
                                        <span class="d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none">
                                            Click the video link above it will take you to the <a href="#" class="text-primary fw-bold">Youtube</a> video, <span class="fw-bold text-primary">There is a bonus for those who subscribe, comment and like after watching the video</span>.
                                        </span>
                                        <span class="d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block">
                                            Go to <a href="https://www.youtube.com" target="_blank" class="text-primary fw-bold">Youtube</a> to subscribe, comment and like <span class="fw-bold text-primary">to qualify for a bonus</span> .
                                        </span>
                                    </p>
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
            <a class="bg-light text-decoration-none text-start fw-bold" href="{{ route('page12') }}">Prev</a>
            </div>
            <div class="col-1">
            <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page14') }}">Next</a>
            </div>
        </div>
        </div>
    </p>
</div>
@endsection