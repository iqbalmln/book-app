@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="breadcrumb-item">Manage Authors</li>
    <li class="breadcrumb-item active">Authors</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('authors.update', $author->id) }}" method="post" enctype="multipart/form">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name *</label>
            <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="{{ $author->first_name }}" value="{{ $author->first_name }}">
            @error('first_name')
              <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="{{ $author->last_name }}" value="{{ $author->last_name }}">
            @error('last_name')
              <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email_address">Email Address *</label>
            <input type="email" name="email_address" id="email_address" class="form-control @error('email_address') is-invalid @enderror" placeholder="{{ $author->email_address }}" value="{{ $author->email_address }}">
            @error('email_address')
              <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="biodata">Biodata</label>
            <textarea name="biodata" id="biodata" class="form-control @error('biodata') is-invalid @enderror" placeholder="{{ $author->biodata }}">{{ $author->biodata }}</textarea>
            @error('biodata')
              <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="profile_picture">Profil Picture</label>
            <div class="custom-file">
                <input type="file" name="profile_picture" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-success">Update Author</button>
      </form>
    </div>
  </div>
</div>
@endsection