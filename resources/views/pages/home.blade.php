
@extends('layouts.header_Footer')
@section('TechSate')

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                <img class="img-fluid" src="/assets/img/carousel-1.jpg" alt="Image">
            </button>

            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                <img class="img-fluid" src="/assets/img/carousel-2.jpg" alt="Image">
            </button>

            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                <img class="img-fluid" src="/assets/img/carousel-3.jpg" alt="Image">
            </button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="/assets/img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4 animated zoomIn">We Are Leader In</h4>
                        <h1 class="display-1 text-white mb-0 animated zoomIn">Creative & Innovative Digital Solution</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="w-100" src="/assets/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4 animated zoomIn">We Are Leader In</h4>
                        <h1 class="display-1 text-white mb-0 animated zoomIn">Creative & Innovative Digital Solution</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="/assets/img/carousel-3.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4 animated zoomIn">We Are Leader In</h4>
                        <h1 class="display-1 text-white mb-0 animated zoomIn">Creative & Innovative Digital Solution</h1>
                    </div>
                </div>
            </div>
            
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


     <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Years Experience</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">5</h1>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Satisfied Clients</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">200</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Projects Done</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">600</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="/assets/img/about-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                        <h1 class="display-6 mb-4">#1 Digital Solution With <span class="text-primary">5 Years</span> Of Experience</h1>
                        <p style="text-align: justify">Welcome to TechSateUganda a leading technology company dedicated to delivering innovative and cutting-edge solutions to businesses worldwide. With a strong focus on quality, reliability, and client satisfaction, we are committed to helping our clients leverage the power of technology to drive growth, streamline operations, and stay ahead of the competition.</p>
                        <p class="mb-4" style="text-align: justify">At TechSateUganda, we understand that every business is unique, with its own set of challenges and goals. That's why we offer a comprehensive range of technology services tailored to meet the specific needs of our clients. Whether you are a small startup, a mid-sized enterprise, or a large corporation, we have the expertise, resources, and passion to deliver exceptional results that exceed your expectations.</p>
                        <p class="mb-4" style="text-align: justify">Our team of experienced professionals comprises talented developers, designers, engineers, and project managers who are at the forefront of technological advancements. They bring a wealth of knowledge and expertise to the table, ensuring that our clients receive the highest level of service and benefit from the latest industry best practices.</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('about-us')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Why Choose Us</h6>
                        <h1 class="display-6 mb-4" style="text-align: justify">Why People Trust Us? </h1>
                        <p class="mb-4" style="text-align: justify">At the core of our service offerings is a strong commitment to quality. We believe that quality is not just a goal but a mindset that permeates every aspect of our work. From the initial consultation to project delivery and ongoing support, we strive for excellence in every step of the process. By combining our technical expertise with a deep understanding of our clients' business objectives, we deliver tailored solutions that align perfectly with their needs.</p>
                        <div class="row g-4">

                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Software Development</p>
                                        <p class="mb-2">100%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Web development</p>
                                        <p class="mb-2">98%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Digital Marketing</p>
                                        <p class="mb-2">96%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">SEO Optimisation</p>
                                        <p class="mb-2">97%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Graphics Designing</p>
                                        <p class="mb-2">99%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Mobile Apps Development</p>
                                        <p class="mb-2">95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-4" href="{{route('about-us')}}">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="/assets/img/about-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Project Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Services</h6>
                <h1 class="display-6 mb-4">Learn More About Our Complete Projects </h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item border rounded h-100 p-4" data-dot="01">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/project-1.jpg" alt="">
                        <a href="/assets/img/project-1.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Website Development</h6>
                    <span style="text-align:justify">Elevate Your Online Presence with Professional Website Development Services</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="02">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/project-2.jpg" alt="">
                        <a href="/assets/img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>App Development</h6>
                    <span>Unleash the Power of Mobile Applications with Our Exceptional App Development Services</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="03">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/project-3.jpg" alt="">
                        <a href="/assets/img/project-3.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Software Development</h6>
                    <span>Seamless Software Installation and Configuration: Simplify Your Digital Journey</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="04">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/project-4.jpg" alt="">
                        <a href="/assets/img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Digital Marketing</h6><br> 
                    <span>Drive Business Success with Expert Digital Marketing Services  </span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="05">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/project-5.jpg" alt="">
                        <a href="/assets/img/project-5.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Graphics Designing</h6>
                    <span>Unleash Creativity and Enhance Branding with Professional Graphics Designing Services</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="06">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/project-6.jpg" alt="">
                        <a href="/assets/img/project-6.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>SEO Optimization</h6> <br>
                    <span>Unlock Your Online Potential with Professional SEO Services</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="07">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/project-7.jpg" alt="">
                        <a href="/assets/img/project-7.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Audio & Video Ads Production</h6>
                    <span>Captivate Your Audience with Professional Audio and Video Ads Production</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="08">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/project-8.jpg" alt="">
                        <a href="/assets/img/project-8.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6 style="text-align: center">Content Management System</h6>
                    <span>Streamline Your Content Workflow with Pro Content Management System </span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="09">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/project-9.jpg" alt="">
                        <a href="/assets/img/project-9.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Training Program</h6> <br>
                    <span>Unlocking the Power of Professional Programming and Development Services</span>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Project End -->

    <!-- Our patterners Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Patterners</h6>
                <h1 class="display-6 mb-4">Were trusted by world known companies</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item border rounded h-100 p-4" data-dot="01">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/ziingo.jpg" alt="">
                        <a href="/assets/img/ziingo.png" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                </div>

                <div class="project-item border rounded h-100 p-4" data-dot="02">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/hub.jpg" alt="">
                        <a href="/assets/img/hub.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                </div>

                <div class="project-item border rounded h-100 p-4" data-dot="03">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/taqwa.jpg" alt="">
                        <a href="/assets/img/taqwa.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                </div>

                <div class="project-item border rounded h-100 p-4" data-dot="04">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/ishak.jpg" alt="">
                        <a href="/assets/img/ishak.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                </div>

                <div class="project-item border rounded h-100 p-4" data-dot="05">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/wdd.jpg" alt="">
                        <a href="/assets/img/wdd.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                </div>

                <div class="project-item border rounded h-100 p-4" data-dot="06">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/uetcl.jpg" alt="">
                        <a href="/assets/img/uetcl.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                </div>

                <div class="project-item border rounded h-100 p-4" data-dot="07">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="/assets/img/troque.jpg" alt="">
                        <a href="/assets/img/troque.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Our patterners End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="display-6 mb-4">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="/assets/img/testimonial-1.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">huzaiphar</h5>
                            <span>Software Engineer</span>
                        </div>
                    </div><p></p>
                    <p class="mb-0" style="text-align: justify">When Working with TechSateUganda for the developing of  our custom software, it was an absolute pleasure. They took the time to understand our unique requirements and delivered a solution that exceeded our expectations.We now have a powerful and user-friendly software application</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="/assets/img/testimonial-2.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Isiiko Isaac</h5>
                            <span>Medical Professional</span>
                        </div>
                    </div>
                    <p class="mb-0" style="text-align: justify">The web development services provided by TechSateUganda were outstanding. They demonstrated deep understanding of our brand and delivered a visually stunning website that perfectly captured our company's essence.The user interface is intuitive, and the website performs flawlessly across devices.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="/assets/img/testimonial-3.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Abdul-Rahman</h5>
                            <span>Business Man</span>
                        </div>
                    </div>
                    <p class="mb-0" style="text-align: justify">Partnering with TechSateUganda for our web app development was a game-changer for our business. Their team of skilled developers took our concept and transformed it into a feature-rich and intuitive mobile application.The attention to detail, timely delivery, and ongoing support have been exceptional.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="/assets/img/testimonial-4.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Masiiko</h5>
                            <span>CEO</span>
                        </div>
                    </div>
                    <p class="mb-0" style="text-align: justify">TechSateUganda provided us with outstanding software integration and API development services. Their team seamlessly integrated our existing systems, enabling smooth data exchange and automation. We are extremely satisfied with the results and recommend their development services.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
   

