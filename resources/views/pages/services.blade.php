@extends('layouts.header_Footer')
@section('TechSate')



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="display-6 mb-4">We Focus On Making The Best In All Sectors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('WebDevelopment')}}">
                        <img class="img-fluid rounded mb-4" src="/assets/img/project-5.jpg" alt="">
                        <h4 class="mb-0">Website Development</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('AppDevelopment')}}">
                        <img class="img-fluid rounded mb-4" src="/assets/img/service-2.jpg" alt="">
                        <h4 class="mb-0">App Development</h4>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('Software-Development')}}">
                        <img class="img-fluid rounded mb-4" src="/assets/img/project-9.jpg" alt="">
                        <h4 class="mb-0">Software Development</h4>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('Digital-Marketing')}}">
                        <img class="img-fluid rounded mb-4" src="/assets/img/service-4.jpg" alt="">
                        <h4 class="mb-0">Digital Marketing </h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('Graphics-Design')}}">
                        <img class="img-fluid rounded mb-4" src="/assets/img/project-1.jpg" alt="">
                        <h4 class="mb-0">Graphics Designing </h4>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('Search-Engine-Optimisation')}}">
                        <img class="img-fluid rounded mb-4" src="/assets/img/project-3.jpg" alt="">
                        <h4 class="mb-0">SEO Optimization</h4>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('Audio&Video')}}">
                        <img class="img-fluid rounded mb-4" src="/assets/img/project-11.jpg" alt="">
                        <h4 class="mb-0">Audio & Video Ads Production</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('Content-Management-System')}}">
                        <img class="img-fluid rounded mb-4" src="/assets/img/project-12.jpg" alt="">
                        <h4 class="mb-0">Content Management System</h4>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('TrainingProgramming')}}">
                        <img class="img-fluid rounded mb-4" src="/assets/img/service-6.jpg" alt="">
                        <h4 class="mb-0">Training Program</h4>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection