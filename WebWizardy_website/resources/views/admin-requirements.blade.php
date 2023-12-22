@extends('layouts.admin-layout')

@section('title', 'Admin Requirements')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <div class="row justify-content-between">
                <div class="col">
                    <h1>Feature Requirements</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Requirements</li>
                        </ol>
                    </nav>
                </div>

                <div class="col text-end">
                    <button class="saveButton">Request Requirements</button>
                </div>
            </div>
        </div><!-- End Page Title -->

        <section class="section">
            @if ($requirements != null)
                @foreach ($requirements as $r)
                    <div class="row aBox">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="pt-2">{{ $r->requirement_name }}</h4>
                            <h6 class="pt-2">Status: {{ $r->status }}</h6>
                        </div>


                        <h6>{{ $r->requirement_description }}</h6>

                        <div style="display: flex; width: 100%">
                            <form method="POST" action="{{ route('update.requirement.status', $r->id) }}" class="pb-2" style="width: 100%">
                                @csrf
                                @method('PUT') {{-- Use PUT method for updating --}}

                                <div style="display: flex; justify-content: flex-end;">
                                    <input type="hidden" name="id" value="{{ $r->id }}">
                                    <input type="hidden" name="status" value="{{ $r->status }}">
                                    @if ($r->status == 'Active')
                                        <button class="btn btn-success ms-3" type="submit">
                                            Done
                                        @elseif($r->status == 'Done')
                                            <button class="saveButton ms-3" type="submit">
                                                Re Activate
                                    @endif
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </section>

    </main><!-- End #main -->
@endsection
