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
        <div class="avatar-icon-x">
        <!-- <i class="cil-pencil"></i> -->
        </div>
    </div>
    <div class="avatar-caption">
        <h1>Nyi Roro Kidul</h1>
        <p>East Java, Indonesia</p>
    </div>
</div>
<div class="content">
    <div class="col-flex">
        <div class="flex-item-left">
            <p>First Name</p>
            <h5>Iqbal</h5>
        </div>
        <div class="flex-item-right">
            <p>Last Name</p>
            <h5>Maulana</h5>
        </div>
    </div>
    <div class="col-flex">
        <div class="flex-item-left">
            <p>Email Address</p>
            <h5>miqblmaulana@gmail.com</h5>
        </div>
        <div class="flex-item-right">
            <p>Role</p>
            <h5>Admin</h5>
        </div>
    </div>
    <div class="col-flex">
        <div class="flex-item-left">
            <p>Password</p>
            <h5>xxxxx</h5>
        </div>
    </div>
</div>
@endsection