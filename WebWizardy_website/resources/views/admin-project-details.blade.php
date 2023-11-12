@extends('layouts.admin-layout')

@section('title', 'Admin Project Details')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <div class="row justify-content-between">
                <div class="col">
                    <h1>Project Details</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Tentang Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <form action="/admin-tentang-kami" method="POST">
                    @csrf
                    {{-- @php
                        $latarbelakang = $aboutus
                            ->where('id', 1)
                            ->pluck('description')
                            ->first();
                        $maksud = $aboutus
                            ->where('id', 2)
                            ->pluck('description')
                            ->first();
                        $tujuan = $aboutus
                            ->where('id', 3)
                            ->pluck('description')
                            ->first();
                    @endphp --}}

                        <div class="row aBox p-3">
                            <div class="col">
                                <h4>Project Start</h4>
                                <h5>10 october 0202</h5>
                            </div>
                            <div class="col">
                                <h4>Project End</h4>
                                <h5>Not Yet</h5>
                            </div>
                        </div>

                    <div class="mt-5  aBox p-3">
                        <h4>Payment Status & Details</h4>
                        <h5>1 million NOT PAID</h5>
                    </div>

                    <div class="mt-5  aBox p-3">
                        <h4>Project package details</h4>
                        <h5>single landing page</h5>
                    </div>


                </form>
            </div>
        </section>



    </main><!-- End #main -->

@endsection
