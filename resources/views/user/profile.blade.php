@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Account Profile</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="header">
    <div class="avatar-image">
        <img src="https://images.unsplash.com/photo-1493752603190-08d8b5d1781d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDd8fG1vZGVsfGVufDB8MnwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt="">
        <div class="avatar-icon-x">
        <!-- <i class="cil-pencil"></i> -->
        </div>
    </div>
    <div class="avatar-caption">
        <h1>{{ $user[0]->first_name }} {{ $user[0]->last_name }}</h1>
    </div>
</div>
<div class="content">
    <div class="col-flex">
        <div class="flex-item-left">
            <p>First Name</p>
            <h5>{{ $user[0]->first_name }}</h5>
        </div>
        <div class="flex-item-right">
            <p>Last Name</p>
            <h5>{{ $user[0]->last_name }}</h5>
        </div>
    </div>
    <div class="col-flex">
        <div class="flex-item-left">
            <p>Email Address</p>
            <h5>{{ $user[0]->email_address }}</h5>
        </div>
        <div class="flex-item-right">
            <p>Role</p>
            <h5>{{ $user[0]->role->role_name }}</h5>
        </div>
    </div>
</div>
@endsection