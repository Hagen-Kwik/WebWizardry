@extends('layouts.main_layout')

@section('title', 'Pricing')

@section('content')



    <div id="services" class="services section">

        <form action="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4>Order your Project!</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <h2>Selected Project: </h2>
                    <div class="col-lg-12">
                        <div class="order">
                            <h5>Single-Page Website Plan</h5>
                            <br>
                            <h6>Details</h6>
                            <h6>Single page, no Maintance, and so on </h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 5vh">
                <div class="row">
                    <h2>Negotiate for your Price:</h2>
                    <div class="col-lg-12">
                        <div class="order">
                            <div></div>
                            <h6>Initial Price: Rp 1,000,000</h6>
                            <h6>Negotiated Price: <input type="text"></h6>
                            <h6>Why:</h6>
                            <input type="textarea"s style="width: 100%;">
                            <br>
                            <br>
                            <h6>Negotiated Price: Rp 1,500,000</h6>
                            <h6>Why:</h6>
                            <h6>becuase it is harder than it looks</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 5vh">
                <div class="row order">
                    <h2>Requirements:</h2>
                    <br>
                    <br>

                    <div class="col-lg-12" id="requirements-container">

                        <div class="requirement" data-id="1">
                            <h6>Requirement Title 1</h6>
                            <input type="text" name="title_1">
                            <h6>Requirement Details 1</h6>
                            <input type="text" name="details_1">
                            <br> <br>
                        </div>


                    </div>

                    <div>
                        <button id="addRequirement">+ Add Requirement</button>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 5vh; text-align: center">
                <button class="submit_button" type="submit">Submit Project</button>
            </div>

        </form>
    </div>




@endsection
