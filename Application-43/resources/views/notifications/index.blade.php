@extends('layouts.master')
@section('title', 'Activités')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>All Notifications</h4>
                <h6>View your all activities</h6>
            </div>
        </div>

        <div class="activity">
            <div class="activity-box">
                <ul class="activity-list">
                    @foreach($notifications as $notification)
                        <li>
                            <div class="activity-user">
                                <a href="{{ route('application.chat', ['id' => $notification->user_id]) }}" title="{{ $notification->user->name }}" data-toggle="tooltip" data-original-title="{{ $notification->user->name }}">
                                    <img alt="{{ $notification->user->name }}" src="{{ asset('assets/img/customer/' . $notification->user->profile_image) }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="{{ route('application.chat', ['id' => $notification->user_id]) }}" class="name">{{ $notification->user->name }}</a> 
                                    {{ $notification->message }}
                                    <span class="time">{{ $notification->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $notifications->links() }}
            </div>
        </div>

    </div>
</div>
@endsection