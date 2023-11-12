@extends('layouts.admin-layout')

@section('title', 'Admin Progress')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <div class="row justify-content-between">
                <div class="col">
                    <h1>Project Progress</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Progress</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div><!-- End Page Title -->

        <section class="section">
            <h3>Website Progress</h3><br>
            {{-- Progress Bar --}}
            <div class="progress mt-3" style="height: 50px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <h3>Priority Task Today!</h3><br>

                    {{-- Requirements --}}
                    <section class="section col-md-6">
                        {{-- @if ($results != null) --}}
                        {{-- @foreach ($results as $result) --}}
                        <div class="row aBox">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="pt-2">Requirement 1</h4>
                                <h6 class="pt-2">O Status: Open/Closed</h6>
                            </div>


                            <h6>description</h6>

                            <div style="display: flex; width: 100%">
                                <form method="POST" action="" class="pb-2" style="width: 100%">
                                    @csrf
                                    <div style="display: flex; justify-content: flex-end;">
                                        {{-- <input type="hidden" name="id" value="{{ $result->id }}"> --}}

                                        {{-- <input type="hidden" name="id" value="{{ $result->id }}"> --}}
                                        <input type="hidden" name="reply" value="yes">
                                        <button class="saveButton ms-3" type="submit">Done</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                        {{-- @endif --}}
                    </section>

                    {{-- Feedbacks --}}
                    <section class="section col-md-6">
                        {{-- @if ($results != null) --}}
                        {{-- @foreach ($results as $result) --}}
                        <div class="row aBox">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="pt-2">Feedback 1</h4>
                                <h6 class="pt-2">O Status: Open/Closed</h6>
                            </div>


                            <h6>description</h6>
                            <br><br>
                            <h5>Replies:</h5>
                            <h6>CLient: I WANT MORE</h6>
                            <div style="display: flex; width: 100%">
                                <form method="POST" action="" class="pb-2" style="width: 100%">
                                    @csrf
                                    <div style="display: flex; justify-content: flex-start;">
                                        <label for="">Me :</label>
                                        <input type="text">
                                    </div>
                                    <div style="display: flex; justify-content: flex-end;">
                                        {{-- <input type="hidden" name="id" value="{{ $result->id }}"> --}}

                                        {{-- <input type="hidden" name="id" value="{{ $result->id }}"> --}}
                                        <input type="hidden" name="reply" value="yes">
                                        <button class="saveButton ms-3" type="submit">Reply</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                        {{-- @endif --}}
                    </section>

                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
