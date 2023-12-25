@extends('layouts.admin-layout')

@section('title', 'Admin Progress')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <div class="row justify-content-between">
                <div class="col">
                    <h1>Project Dashboard</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div><!-- End Page Title -->

        <section class="section">
            <h3>Website Progress</h3><br>

            <div class="progress mt-3" style="height: 50px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    style="width: {{ $project->progress_percentage }}%;" aria-valuenow="{{ $project->progress_percentage }}" aria-valuemin="0"
                    aria-valuemax="100">
                    {{ $project->progress_percentage }}
                </div>
            </div>

            {{-- requirements and feedbacks --}}
            <div class="mt-3">
                <div class="row">
                    {{-- Requirements --}}
                    <div class="col-md-6">
                        <div class="row aBox">
                            <h5>Requirements Done:</h5>
                            <p>Active: {{ $requirements->where('status', 'Active')->count() }}</p>
                            <p>Done: {{ $requirements->where('status', 'Done')->count() }}</p>
                        </div>
                    </div>

                    {{-- Feedbacks --}}
                    <div class="col-md-6">
                        <div class="row aBox">
                            <h5>Feedbacks:</h5>
                            <h3>{{ $feedbacks->count() }}</h3>
                        </div>
                    </div>
                </div>

                {{-- Links --}}
                <div class="mt-3">
                    <div class="row aBox">
                        @if ($user->admin)
                            <form method="post" action="{{ route('save.project.links', $project->id) }}">
                                @csrf
                                <div class="col-md-12">
                                    <label for="github">Github:</label>
                                    <input type="text" class="form-control" id="github" name="github" value="{{ $project->github }}">
                                </div>
                                <div class="col-md-12">
                                    <label for="mockup">Website Mockup:</label>
                                    <input type="text" class="form-control" id="mockup" name="mockup" value="{{ $project->website_mockup }}">
                                </div>
                                <div class="col-md-12">
                                    <label for="proposal">Proposal:</label>
                                    <input type="text" class="form-control" id="proposal" name="proposal" value="{{ $project->proposal }}">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        @else
                            {{-- If user is not admin, display links --}}
                            <div class="col-md-12">
                                <h5>Github:</h5>
                                <a href="{{ $project->github_link }}" target="_blank">{{ $project->github }}</a>
                            </div>
                            <div class="col-md-12">
                                <h5>Website Mockup:</h5>
                                <a href="{{ $project->mockup_link }}" target="_blank">{{ $project->website_mockup }}</a>
                            </div>
                            <div class="col-md-12">
                                <h5>Proposal:</h5>
                                <a href="{{ $project->proposal_link }}" target="_blank">{{ $project->proposal }}</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->
@endsection
