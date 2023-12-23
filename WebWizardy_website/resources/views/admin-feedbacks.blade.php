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
                    <button class="saveButton">Add Feedback</button>
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

                        {{-- loop all feedbacks replies on each requirement --}}
                        @foreach ($groupedFeedbacks as $result)
                            <h6>
                                @if ($result->admin == 'yes')
                                    Admin: {{ $result->feedback }}
                                @else
                                    Client: {{ $result->feedback }}
                                @endif
                            </h6>

                            {{-- Display "Replies" heading only once --}}
                            @php $repliesDisplayed = false; @endphp

                            @foreach ($groupedFeedbacks->where('parent_id', $result->id) as $reply)
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






    </main><!-- End #main -->
@endsection
