@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="breadcrumb-item">Manage Rents</li>
    <li class="breadcrumb-item active">Rents</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div>
    Rents Page
</div>
@endsection