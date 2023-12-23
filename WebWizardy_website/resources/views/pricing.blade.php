@extends('layouts.main_layout')

@section('title', 'Pricing')

@section('content')

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                            <div class="show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row" style="text-align: center">
                                    <div class="col-lg-12">
                                        <h1><em>Pricing<em></h1>
                                        <h5> Find your needs and get your best price</h5>
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
                            <a href="/order_now">Purchase This Plan Now</a>
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
                            <li>Maintenence per 3 Months</li>
                            <li>Limited Premium Add-Ons</li>
                            <li class="non-function">Hosting Avialable</li>
                        </ul>
                        <div class="border-button">
                            <a href="/order_now">Purchase This Plan Now</a>
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
                            <a href="/order_now">Purchase This Plan Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
