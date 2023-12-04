@extends('layouts.main_layout')

@section('title', 'Past Projects')

@section('content')

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                            <div class="show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row" style="text-align: center">
                                    <div class="col-lg-12">
                                        <h1><em>Past Projects<em></h1>
                                        <h5> See and explore our past products!</h5>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    {{-- here --}}
    <div id="pricing" class="pricing-tables">
        <div class="container">
            <div class="row">

                {{-- first --}}
                <div class="col-lg-3">
                    <div class="project-item">
                        <h3>My Library Website</h3>
                        <h6 style="padding: 5%">My first university project</h6>
                        <a href="/">See website</a>
                    </div>
                </div>

                {{-- first --}}
                <div class="col-lg-3">
                    <div class="project-item">
                        <h4>Single-Page Website</h4>
                       
                    </div>
                </div>

                {{-- first --}}
                <div class="col-lg-3">
                    <div class="project-item">
                        <h4>Single-Page Website</h4>
                       
                    </div>
                </div>

                {{-- first --}}
                <div class="col-lg-3">
                    <div class="project-item">
                        <h4>Single-Page Website</h4>
                       
                    </div>
                </div>

                {{-- first --}}
                <div class="col-lg-3">
                    <div class="pricing-item-regular">
                        <h4>Single-Page Website</h4>
                       
                    </div>
                </div>

                
                  
            </div>
        </div>
    </div>




@endsection