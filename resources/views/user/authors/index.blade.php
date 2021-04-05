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
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <h2>Authors Table</h2>
                    </div>
                    <div>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#booksModal">Create New Author</button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Profil Picture</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Biodata</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $key => $author)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    @if ($author->profile_picture)
                                    <img
                                        src="{{ asset('storage/images/authors/' . $author->profile_picture) }}"
                                        class="img-responsive"
                                        style="width: 4rem; height: 4rem;"
                                    >
                                    @else
                                    <div style="width: 4rem; height: 4rem; background: #f4e3b2; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; color: #fff;">
                                        {{ strtoupper($author->first_name[0]) }}{{ $author->last_name ? strtoupper($author->last_name[0]) : '' }}
                                    </div>
                                    @endif
                                </td>
                                <td>{{ $author->first_name }}</td>
                                <td>{{ $author->last_name ?? '-' }}</td>
                                <td>{{ $author->email_address }}</td>   
                                <td>{{ $author->biodata }}</td>
                                <td>
                                    <button class="btn btn-sm btn-info">
                                        <i class="cil-lightbulb"></i>
                                    </button>
                                    <a href="{{ route('authors.edit', $author->id) }}"class="btn btn-sm btn-success">
                                        <i class="cil-pencil"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger" onclick="deleteAuthor(this)">
                                        <i class="cil-trash"></i>
                                    </button>
                                    <form
                                        action="{{ route('authors.destroy', $author->id) }}"
                                        class="d-none"
                                        method="POST"
                                    >
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
                <h4 class="modal-title">Create New Author</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form action="{{ route('authors.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="first_name">First Name *</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name ...">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name ...">
                    </div>
                    <div class="form-group">
                        <label for="email_address">Email Address *</label>
                        <input type="email" name="email_address" id="email_address" class="form-control" placeholder="Enter email ...">
                    </div>
                    <div class="form-group">
                        <label for="biodata">Biodata</label>
                        <textarea name="biodata" id="biodata" class="form-control" placeholder="Enter Biodata ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="profile_picture">Profil Picture</label>
                        <div class="custom-file">
                            <input type="file" name="profile_picture" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
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
        function deleteAuthor (el) {
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