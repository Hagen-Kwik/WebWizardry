@extends('layouts.admin-layout')

@section('title', 'Admin Feedback')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <div class="row justify-content-between">
                <div class="col">
                    <h1>Feature Feedbacks</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Feedback</li>
                        </ol>
                    </nav>
                </div>
                <div class="col text-end">
                    <button type='button' class="saveButton"data-bs-toggle="modal" data-bs-target="#addNewFeedback">Add Feedback</button>
                </div>
            </div>
        </div><!-- End Page Title -->

        <section class="section">
            {{-- loop all feedbacks on the project --}}
            @if ($feedbacks != null)
                @foreach ($feedbacks->groupBy('requirement_id') as $requirementId => $groupedFeedbacks)
                    <div class="row aBox">
                        @php $firstFeedback = $groupedFeedbacks->first(); @endphp
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="pt-2">{{ $firstFeedback->requirement_name }}</h4>
                        </div>
        
                        {{-- Sort the $groupedFeedbacks array by timestamp --}}
                        @php
                            $sortedFeedbacks = $groupedFeedbacks->sortBy('created_at');
                        @endphp
        
                        {{-- loop all feedbacks replies on each requirement --}}
                        @foreach ($sortedFeedbacks as $result)
                            <h6>
                                @if ($result->admin == 'yes')
                                    Admin: {{ $result->feedback }}
                                @else
                                    Client: {{ $result->feedback }}
                                @endif
                            </h6>
        
                            {{-- Display "Replies" heading only once --}}
                            @php $repliesDisplayed = false; @endphp
        
                            @foreach ($sortedFeedbacks->where('parent_id', $result->id) as $reply)
                                {{-- Display "Replies" heading only once --}}
                                @if (!$repliesDisplayed)
                                    <h5>Replies:</h5>
                                    @php $repliesDisplayed = true; @endphp
                                @endif
        
                                <h6>
                                    @if ($reply->admin == 'yes')
                                        Admin: {{ $reply->reply }}
                                    @else
                                        Client: {{ $reply->reply }}
                                    @endif
                                </h6>
                            @endforeach
                        @endforeach

        

                        <div style="display: flex; width: 100%">
                            <form method="POST" action="{{ route('feedback.store', $project_id) }}" class="pb-2" style="width: 100%">
                                @csrf
                                <div style="display: flex; justify-content: flex-start;">
                                    <label for="feedback">Reply :</label>
                                    <input type="text" name="feedback">
                                </div>
                                <div style="display: flex; justify-content: flex-end;">
                                    <input type="hidden" name="parent_id" value="{{ $result->id }}">
                                    <input type="hidden" name="requirement_id" value="{{ $requirementId }}">
                                    <button class="saveButton ms-3" type="submit">Reply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </section>

        <div class="modal fade" id="addNewFeedback" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('add.feedbacks', ['id' => $project_id]) }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Add Feedback</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Choose Requirement</label>
                                <div class="col-sm-8">
                                    <select name="requirement_id" class="form-control" required>
                                        @php
                                            $remainingRequirementIds = $requirements->pluck('id')->diff($displayedRequirementIds)->toArray();
                                        @endphp
                                        @forelse ($remainingRequirementIds as $requirementId)
                                            @php $requirement = $requirements->where('id', $requirementId)->first(); @endphp
                                            <option value="{{ $requirement->id }}">{{ $requirement->requirement_name }}</option>
                                        @empty
                                            <option disabled>No new requirements</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Feedback</label>
                                <div class="col-sm-8">
                                    <input type="name" name="feedback" class="form-control" required>
                                </div>
                            </div>
        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

        <script>
            $(document).ready(function() {
                $('#addNewFeedback').modal({
                    backdrop: 'static',
                    keyboard: false
                });

                $('#addNewFeedback .btn-close').click(function() {
                    // Optionally, you can add a custom close behavior here
                });
            });
        </script>




    </main><!-- End #main -->
@endsection
