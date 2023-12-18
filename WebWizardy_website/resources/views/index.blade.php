@extends('layouts.main_layout')

@section('title', 'Web Wizardry')

@section('content')


    <!-- ***** Banner ***** -->
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>The Right PRICE for Your Very Own Website Now!</h2>
                                        <p>Use WebWizardry to create the your dream website with ease</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="all_images/banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Features ***** -->
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <div class="icon"></div>
                        <h4>Progress Tracking</h4>
                        <p>Track the progress of your website building process inside this website directly</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>Rocket Fast Production</h4>
                        <p>Your dream website creation will take significantly less time than our competitors.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item third-service">
                        <div class="icon"></div>
                        <h4>Negotiable Pricing</h4>
                        <p>Enjoy negotiable pricing options for flexible payment plans that suit your budget and project
                            needs.</p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item fourth-service">
                        <div class="icon"></div>
                        <h4>Real-time Communication</h4>
                        <p>Enable real-time communication in website between collaborators for seamless collaboration</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Testimonials ***** -->
    {{-- Make fake clients --}}
    <div id="clients" class="the-clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>Check What <em>People Say</em> About Our Works</h4>
                        <img src="images/heading-line-dec.png" alt="">
                        <p>Below are reviews from our past projects and how people think about them.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-7 align-self-center">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>Pascal Roger J. T.</h4>
                                                        <span class="date">10 November 2023</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Computer Science</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.4</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>Gavin Lienardi</h4>
                                                        <span class="date">10 November 2023</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Informatics</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.2</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>Bryan Tanza</h4>
                                                        <span class="date">11 November 2023</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Architecture</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>Random User</h4>
                                                        <span class="date">24 November 2021</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">New App Ecosystem</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">3.9</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="last-thumb">
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>Mark Amber Do</h4>
                                                        <span class="date">14 November 2023</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Web Development</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="images/quote.png" alt="">
                                                                <p>“For the purpose and content of the website, the layout fits well for the content to be understood with ease but if more content is added, then the website would be perfect."</p>
                                                                <p>Review for Citizen Journalism Remaja</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="all_images/Review1.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Pascal Roger J. T.</h4>
                                                                    <span>CompSci Undergraduate from ITS</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="images/quote.png" alt="">
                                                                <p>“Although the resulting website could be improved, I feel like the website as a whole can be enough to convey the necessary information. I feel like it's possible to reduce the whitespace between each container to make the layout feel nicer. Aside from that, the chosen color pallette feels warm and nice.”</p>
                                                                <p>Review for Citizen Journalism Remaja</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="all_images/Review2.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Gavin Lienardi</h4>
                                                                    <span>Informatics Student in UC Surabaya</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="images/quote.png" alt="">
                                                                <p>“The website looks user-friendly. Maybe display the main content sideways so people can view the information faster then use the bottom space for something else.”</p>
                                                                <p>Review for Citizen Journalism Remaja</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="all_images/Review3.png" alt="">
                                                                <div class="right-content">
                                                                    <h4>Bryan Tanza</h4>
                                                                    <span>Architecture Student <br> in UKP Surabaya</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        {{-- <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="images/quote.png" alt="">
                                                                <p>“Lorem ipsum dolor sit amet, consectetur adpiscing
                                                                    elit, sed do eismod tempor idunte ut labore et
                                                                    dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit
                                                                    massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Random Staff</h4>
                                                                    <span>Manager, Digital Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> --}}
                                        {{-- <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="images/quote.png" alt="">
                                                                <p>“Mark, Lorem ipsum dolor sit amet, consectetur
                                                                    adpiscing elit, sed do eismod tempor idunte ut
                                                                    labore et dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit
                                                                    massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Mark Am</h4>
                                                                    <span>CTO, Amber Do Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pricing" class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>We Have The Best  <em>Prices</em> You Can Get</h4>
                    </div>
                </div>

                {{-- first --}}
                <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">1 JT</span>
                        <h4>Single-Page Website</h4>
                        <div class="icon">
                            <img src="images/pricing-table-01.png" alt="">
                        </div>
                        <ul>
                            <li>1 Long Page</li>
                            <li>Pre-Made Assets</li>
                            <li class="non-function">Maintenence</li>
                            <li class="non-function">Premium Add-Ons</li>
                            <li class="non-function">Hosting Avialable</li>
                        </ul>
                        <div class="border-button">
                            <a href="/pricing">See Details</a>
                        </div>
                    </div>
                </div>

                {{-- second --}}
                <div class="col-lg-4">
                    <div class="pricing-item-pro">
                        <span class="price">5 JT</span>
                        <h4>Personal Website</h4>
                        <div class="icon">
                            <img src="images/pricing-table-01.png" alt="">
                        </div>
                        <ul>
                            <li>Up to 10 Pages</li>
                            <li>Pre-Made Assets</li>
                            <li>Maintenence</li>
                            <li>Limited Premium Add-Ons</li>
                            <li class="non-function">Hosting Avialable</li>
                        </ul>
                        <div class="border-button">
                            <a href="/pricing">See Details</a>
                        </div>
                    </div>
                </div>

                {{-- third --}}
                <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">10 JT</span>
                        <h4>Professional Website</h4>
                        <div class="icon">
                            <img src="images/pricing-table-01.png" alt="">
                        </div>
                        <ul>
                            <li>Unlimited Pages</li>
                            <li>Hand-Made Assets</li>
                            <li>Maintenence per month</li>
                            <li>Premium Add-Ons</li>
                            <li>Hosting Avialable</li>
                        </ul>
                        <div class="border-button">
                            <a href="/pricing">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
