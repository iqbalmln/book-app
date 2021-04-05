@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="breadcrumb-item">Manage Books</li>
    <li class="breadcrumb-item active">Categories</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" value="{{ $category->category }}"id="category" class="form-control @error('category') is-invalid @enderror" placeholder="Enter Category title ...">
            @error('category')
                <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success btn-block">Update Book</button>
      </form>
    </div>
  </div>
</div>
@endsection