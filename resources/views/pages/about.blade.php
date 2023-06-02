@extends('layouts.header_Footer')
@section('TechSate')

    <!-- Page Header Start -->
    <div class="container-fluid page-header-about py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('contact-us')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Why Choose Us</h6>
                        <h1 class="display-6 mb-4">Our Expertise</h1>
                        <p style="text-align: justify">At the core of our service offerings is a strong commitment to quality. We believe that quality is not just a goal but a mindset that permeates every aspect of our work. From the initial consultation to project delivery and ongoing support, we strive for excellence in every step of the process. By combining our technical expertise with a deep understanding of our clients' business objectives, we deliver tailored solutions that align perfectly with their needs.</p>
                        <p class="mb-4" style="text-align: justify">Our success is built on long-lasting partnerships with our clients. We believe in establishing open and transparent communication channels, working closely with our clients to understand their vision, challenges, and aspirations. This collaborative approach allows us to create customized technology solutions that drive tangible results, providing a competitive edge in today's rapidly evolving digital landscape.</p>
                        <p class="mb-4" style="text-align: justify">Whether you require custom software development, web and mobile app development, software integration, or quality assurance services, TechSateUganda is your trusted partner. We are committed to delivering solutions that are scalable, secure, and future-proof, enabling you to adapt and thrive in an ever-changing business environment.</p>
                        <p class="mb-4" style="text-align: justify">Join us on this exciting technological journey as we unlock the full potential of your business. Contact TechSateUganda today, and let us help you achieve your digital transformation goals with our exceptional technology services.</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('contact-us')}}">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="/assets/img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="/assets/img/about-4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Why Choose Us</h6>
                        <h1 class="display-6 mb-4">Why People Trust Us?</h1>
                        <p class="mb-4" style="text-align: justify"> <span style="color:#009CFF;">Unparalleled Expertise:</span> We have a team of highly skilled professionals who possess extensive expertise in their respective fields. Our team members are experienced in a wide range of technologies and have successfully delivered numerous projects across various industries. You can trust that our team has the knowledge and skills necessary to tackle even the most complex technological challenges.</p>
                        <p class="mb-4" style="text-align: justify"> <span style="color:#009CFF;">Client-Centric Approach: </span>We prioritize our clients and their unique needs. Our approach is centered around understanding your business goals, challenges, and requirements. We work closely with you to develop customized solutions that align with your objectives and deliver tangible results. Your success is our ultimate goal, and we go above and beyond to ensure your satisfaction.</p>
                        <p class="mb-4" style="text-align: justify"> <span style="color:#009CFF;">Proven Track Record: </span>We have a track record of consistently delivering high-quality technology solutions. Our portfolio showcases successful projects and satisfied clients. We have a deep understanding of diverse industries and have helped businesses of all sizes achieve their technology goals.</p>
                        <p class="mb-4" style="text-align: justify"> <span style="color:#009CFF;">Timely Delivery:</span>We understand the importance of meeting deadlines. Our project management processes are designed to ensure efficient execution and timely delivery of projects. We set realistic timelines and milestones, keeping you informed and involved at every stage. </p>
                        <p class="mb-4" style="text-align: justify"> <span style="color:#009CFF;">Ongoing Support: </span>Our commitment to your success doesn't end with project delivery. We provide comprehensive support and maintenance services to ensure that your technology solutions continue to perform optimally. Whether you need assistance, updates, or enhancements, our dedicated support team is always available to help you.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Feature End -->

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

   @endsection