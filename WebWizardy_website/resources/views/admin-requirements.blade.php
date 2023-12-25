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
                    <button type="button" class="saveButton" data-bs-toggle="modal" data-bs-target="#addNewRequirement">Request Requirements</button>
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
                            @if ($user->admin === 'yes')
                                <form method="POST" action="{{ route('update.requirement.status', ['id' => $r->id, 'projectId' => $project_id]) }}"
                                    class="pb-2" style="width: 100%">
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
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
        </section>
    </main><!-- End #main -->

    <div class="modal fade" id="addNewRequirement" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('add.requirement', $project_id) }}">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">Add Requirement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-4 col-form-label">Requirement title</label>
                            <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-4 col-form-label">Requirement Description</label>
                            <div class="col-sm-8">
                                <input type="text" name="description" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#addNewRequirement').modal({
                backdrop: 'static',
                keyboard: false
            });

            $('#addNewRequirement .btn-close').click(function() {});
        });
    </script>

@endsection
