@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Account Settings</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div>
    Acccount Settings
</div>
@endsection