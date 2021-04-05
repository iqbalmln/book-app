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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Biodata</th>
                                <th>Profil Picture</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 5; $i++) <tr>
                                <td>{{$i}}</td>
                                <td>Iqbal</td>
                                <td>Maulana</td>
                                <td>miqblmaulana@gmail.com</td>   
                                <td>15 NOV 2000</td>
                                <td>iqbal.jpg</td>

                                <td>
                                    <button class="btn btn-sm btn-info">
                                        <i class="cil-lightbulb"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success">
                                        <i class="cil-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="cil-trash"></i>
                                    </button>
                                </td>
                                </tr>
                                @endfor
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
            <div class="modal-body">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Enter First Name ...">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Enter Last Name ...">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email ...">
                </div>
                <div class="form-group">
                    <label for="email">Biodata</label>
                    <textarea name="email" id="email" class="form-control" placeholder="Enter Biodata ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="profil">Profil Picture</label>
                    <input type="image" name="profil" id="profil" class="form-control" placeholder="Enter Profil Picture ...">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content-->
    </div>
    <!-- /.modal-dialog-->
</div>
<!-- /.modal-->
@endsection