@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="breadcrumb-item">Manage Books</li>
    <li class="breadcrumb-item active">Books</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div>
    Books Page
</div>
@endsection