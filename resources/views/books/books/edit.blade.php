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
      <form action="{{ route('books.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Book Title</label>
            <input type="text" name="title" value="{{ $book->title }}" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter book title ...">
            @error('title')
              <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="author_id">Author name</label>
            <select name="author_id" readonly id="author_id" class="form-control @error('author_id') is-invalid @enderror">
                <option value="" hidden disabled selected>-- Select Author --</option>
                @foreach ($authors as $author)
                <option value="{{ $author->id }}" {{ $book->author_id === $author->id ? 'selected' : '' }}>{{ $author->first_name }} {{ $author->last_name }}</option>
                @endforeach
            </select>
            @error('author_id')
              <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter description ...">{{ $book->description }}</textarea>
            @error('description')
              <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" value="{{ $book->price }}" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price ...">
            @error('price')
              <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" name="publisher" value="{{ $book->publisher }}" id="publisher" class="form-control @error('publisher') is-invalid @enderror" placeholder="Enter publisher ...">
            @error('publisher')
              <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success btn-block">Update Book</button>
      </form>
    </div>
  </div>
</div>
@endsection