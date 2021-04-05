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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <h2>Books Table</h2>
                    </div>
                    <div>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#booksModal">Create New Book</button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Publisher</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $key => $book)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author->first_name }} {{ $book->author->last_name }}</td>
                                <td>{{ $book->description }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->publisher }}</td>
                                <td>
                                    <button class="btn btn-sm btn-info">
                                        <i class="cil-lightbulb"></i>
                                    </button>
                                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-success">
                                        <i class="cil-pencil"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger" onclick="deleteBook(this)">
                                        <i class="cil-trash"></i>
                                    </button>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="post" class="d-none">
                                      @csrf
                                      @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="booksModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New Book</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form action="{{ action('BookController@store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Book Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter book title ...">
                    </div>
                    <div class="form-group">
                        <label for="author_id">Author name</label>
                        <select name="author_id" id="author_id" class="form-control">
                            <option value="" hidden disabled selected>-- Select Author --</option>
                            @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Enter description ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Enter price ...">
                    </div>
                    <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input type="text" name="publisher" id="publisher" class="form-control" placeholder="Enter publisher ...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content-->
    </div>
    <!-- /.modal-dialog-->
</div>
<!-- /.modal-->
@endsection

@push('scripts')
<script>
  function deleteBook(el) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
          el.nextElementSibling.submit()
        }
    })
  }
</script>
@endpush