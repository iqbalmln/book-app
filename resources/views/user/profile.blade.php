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
        <img src="https://images.unsplash.com/flagged/photo-1556151994-b611e5ab3675?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8bW9kZWx8ZW58MHwyfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt="">
        <div class="avatar-icon">
        <i class="cil-pencil"></i>
        </div>
    </div>
    <div class="avatar-caption">
        <h1>Nyi Roro Kidul</h1>
        <p>East Java, Indonesia</p>
    </div>
</div>
<div class="content">
    <div class="left-column">
        <div class="profile-name">
            <p>Name</p>
            <h2>Roro</h2>
        </div>
        <div class="email-address">
            <p>Email</p>
            <h2>nyiroro@gmail.com</h2>
        </div>
        <div class="location">
            <p>Location</p>
            <h2>Pantai Selatan</h2>
        </div>
    </div>
    <div class="right-column">
        <div class="fullname">
            <p>Full Name</p>
            <h2>Nyi Roro Kidul</h2>
        </div>
        <div class="email-address">
            <p>Phone Number</p>
            <h2>666</h2>
        </div>
        <div class="location">
            <p>Postal Code</p>
            <h2>undifined.</h2>
        </div>
    </div>
</div>
@endsection