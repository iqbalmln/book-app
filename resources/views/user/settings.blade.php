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
        <img src="https://images.unsplash.com/photo-1493752603190-08d8b5d1781d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDd8fG1vZGVsfGVufDB8MnwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60np" alt="">
        <div class="avatar-icon">
        <i class="cil-pencil"></i>
        </div>
    </div>
    <div class="avatar-caption">
        <h1>{{ $user[0]->first_name }} {{ $user[0]->last_name }}</h1>
    </div>
</div>
                <!-- /.col-->
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header"><strong>Account Settings</strong></div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="username">First Name</label>
                        <input class="form-control" id="username" type="text" value="{{ $user[0]->first_name }}" placeholder="Enter your username..">
                      </div>
                      <div class="form-group">
                        <label for="lastname">Last name</label>
                        <input class="form-control" id="lastname" type="text" value="{{ $user[0]->last_name }}" placeholder="Enter your lastname..">
                      </div>
                      <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" type="text" value="{{ $user[0]->email_address }}" placeholder="Enter email..">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" type="text" value="{{ $user[0]->password }}" placeholder="Enter password..">
                      </div>
                      <div class="form-group">
                        <label for="role">Role</label>
                        <select name="" id="" readonly class="form-control">
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}" selected>{{ $role->role_name }}</option>
                            @endforeach
                        </select>
                      </div>
                      <button class="btn btn-success float-right" type="button" data-toggle="modal" data-target="#booksModal">Save Changes</button>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
@endsection