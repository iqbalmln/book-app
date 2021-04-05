@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush
@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Account Settings</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="header-settings">
    <div class="avatar-image">
        <img src="https://images.unsplash.com/flagged/photo-1556151994-b611e5ab3675?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8bW9kZWx8ZW58MHwyfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt="">
        <div class="avatar-icon">
        <i class="cil-pencil"></i>
        </div>
    </div>
    <div class="avatar-caption">
        <h1>Nyi Roro Kidul</h1>
        <p class="mid">East Java, Indonesia</p>
    </div>
</div>
                <!-- /.col-->
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header"><strong>Account Settings</strong></div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="username">First Name</label>
                        <input class="form-control" id="username" type="text" placeholder="Enter your username..">
                      </div>
                      <div class="form-group">
                        <label for="lastname">Last name</label>
                        <input class="form-control" id="lastname" type="text" placeholder="Enter your lastname..">
                      </div>
                      <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" type="text" placeholder="Enter email..">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" type="text" placeholder="Enter password..">
                      </div>
                      <div class="form-group">
                        <label for="role">Role</label>
                        <input type="text" class="form-control" id="role" type="text" placeholder="Enter role..">
                      </div>
                      <button class="btn btn-success float-right" type="button" data-toggle="modal" data-target="#booksModal">Save Changes</button>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
@endsection