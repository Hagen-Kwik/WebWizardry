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
                <div class="row aBox p-3">
                    <div class="col">
                        <h4>Project Start</h4>
                        <h5>{{ $project->project_start ? \Carbon\Carbon::parse($project->project_start)->format('d F Y') : 'Not Yet' }}</h5>
                    </div>
                    <div class="col">
                        <h4>Project End</h4>
                        <h5>{{ $project->project_end ? \Carbon\Carbon::parse($project->project_end)->format('d F Y') : 'Not Yet' }}</h5>
                    </div>
                </div>

                <div class="mt-3 aBox p-3">
                    <h4>Payment Status & Details</h4>
                    <h4>BCA - 8620524485 an Hagen</h4>
                    <h5>{{ $project->payment_status }}</h5>
                    <h5>{{ $pricing->price }} </h5>

                    <!-- Upload Image Form -->
                    <form action="{{ route('upload.payment.image', ['projectId' => $project_id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="image">Upload Image:</label>
                        <input type="file" name="image" accept="image/*">
                        <br>
                        <button type="submit">Upload</button>
                    </form>

                    <!-- Display Uploaded Image -->
                    @if ($project->payment_picture)
                        <h5 class="mt-2">Payment Proof: </h5>
                        <img src="{{ asset('storage/payment_images/' . $project->payment_picture) }}" alt="Uploaded Image"
                            style="max-width: 100%; max-height: 300px;">

                        @if ($user->admin == 'yes')
                            <form action="{{ route('approve.payment', ['projectId' => $project_id]) }}" method="POST">
                                @csrf
                                @if ($project->payment_status == 'Waiting Payment')
                                    <button type="submit" class="mt-2 btn btn-success">Approve Payment</button>
                                @else
                                    <button type="submit" class="mt-2 btn btn-danger">Cancel Payment</button>
                                @endif
                            </form>
                        @endif
                    @endif
                </div>

                <div class="mt-3 aBox p-3">
                    <h4>Project Package Details - {{ $project->project_name }}</h4>
                    <p>Number of Pages: {{ $pricing->pages }}</p>
                    <p>Assets Included: {{ $pricing->assets }}</p>
                    <p>Maintenance: {{ $pricing->maintenance }}</p>
                    <p>Add-ons: {{ $pricing->add_ons }}</p>
                    <p>Hosting: {{ $pricing->hosting }}</p>
                </div>


                <div class="row aBox p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="pt-2">Status: {{ $project->status }}</h4>
                        {{-- <a href="{{ route('projects.show', $project->id) }}" class="saveButton">See Details</a> --}}

                        @if ($user->admin == 'yes')
                            <form action="{{ route('finish.project', ['projectId' => $project_id]) }}" method="POST">
                                @csrf
                                @if ($project->status == 'In Progress')
                                    <button type="submit" class="mt-2 btn btn-success">Finish Project</button>
                                @endif
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
