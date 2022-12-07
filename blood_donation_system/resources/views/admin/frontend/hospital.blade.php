@extends('admin.frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title> Admin - Hospital</title>
@endpush

@section('admin-main')


<style>
    .btn-position {
        float: right;
    }

    .error {
        color: #ff7171;
        font-family: system-ui;
        font-size: 14px;
        font-style: italic;
    }
</style>

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Hospital</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="dashboard.php" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Hospital</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5">
                <div class="btn-position">
                    <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#insertModal"> Add Record</button> -->

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#AddRecord">
                        Add Record
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="AddRecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="{{ url('/admin/hospital') }}" method="post">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        @csrf
                                        <div class="form-group">
                                            <label for="inputhospitalname">Hospital Name<snap style="color: #ff7171;">*</snap></label>
                                            <input type="text" name="Hospital_Name" class="form-control" placeholder="Enter Name">
                                            @error('Hospital_Name')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label for="inputCity">City<snap style="color: #ff7171;">*</snap></label>
                                                    <input type="text" name="City" class="form-control" placeholder="Enter City">
                                                    @error('City')
                                                    <div class="error">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="inputState">State<snap style="color: #ff7171;">*</snap></label>
                                                    <select id="inputState" name="State" class="form-control" required>
                                                        <option value="" selected>Choose</option>
                                                        <option value="OD">Odisha</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label for="inputState">(In ml)</label>

                                        <div class="row">
                                            <div class="col-md form-group">
                                                <input name="O_p" type="number" class="form-control" placeholder="O+">
                                            </div>
                                            <div class="col-md form-group">
                                                <input name="O_n" type="number" class="form-control" placeholder="O-">
                                            </div>
                                            <div class="col-md form-group">
                                                <input name="A_p" type="number" class="form-control" placeholder="A+">
                                            </div>
                                            <div class="col-md form-group">
                                                <input name="A_n" type="number" class="form-control" placeholder="A-">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md form-group">
                                                <input name="B_p" type="number" class="form-control" placeholder="B+">
                                            </div>
                                            <div class="col-md form-group">
                                                <input name="B_n" type="number" class="form-control" placeholder="B-">
                                            </div>
                                            <div class="col-md form-group">
                                                <input name="AB_p" type="number" class="form-control" placeholder="AB+">
                                            </div>
                                            <div class="col-md form-group">
                                                <input name="AB_n" type="number" class="form-control" placeholder="AB-">
                                            </div>

                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary btn-sm">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Records</h4>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>State</th>
                                                <th>City</th>

                                                <th>O+</th>
                                                <th>O-</th>
                                                <th>A+</th>
                                                <th>A-</th>
                                                <th>B+</th>
                                                <th>B-</th>
                                                <th>AB+</th>
                                                <th>AB-</th>

                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i=1;
                                            @endphp
                                            @foreach($hospital as $row)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->state }}</td>
                                                <td>{{ $row->city }}</td>

                                                <td>{{ $row->O_p }}</td>
                                                <td>{{ $row->O_n }}</td>
                                                <td>{{ $row->A_p }}</td>
                                                <td>{{ $row->A_n }}</td>
                                                <td>{{ $row->B_p }}</td>
                                                <td>{{ $row->B_n }}</td>
                                                <td>{{ $row->AB_p }}</td>
                                                <td>{{ $row->AB_n }}</td>

                                                <td>{{ $row->created_at }}</td>
                                                <td>{{ $row->updated_at }}</td>

                                                <td>
                                                    <!-- Update Hospital Modal -->
                                                    <div class="modal fade" id="EditRecord{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <form action="{{ url('/admin/hospital-edit') }}" method="post">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        @csrf

                                                                        <input type="hidden" name="id" value="{{ $row->id }}">
                                                                        <div class="form-group">
                                                                            <label for="inputhospitalname">Hospital Name<snap style="color: #ff7171;">*</snap></label>
                                                                            <input type="text" name="Hospital_Name" class="form-control" value="{{ $row->name }}">
                                                                            @error('Hospital_Name')
                                                                            <div class="error">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-7">
                                                                                <div class="form-group">
                                                                                    <label for="inputCity">City<snap style="color: #ff7171;">*</snap></label>
                                                                                    <input type="text" name="City" class="form-control" value="{{ $row->city }}">
                                                                                    @error('City')
                                                                                    <div class="error">{{ $message }}</div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-5">
                                                                                <div class="form-group">
                                                                                    <label for="inputState">State<snap style="color: #ff7171;">*</snap></label>
                                                                                    <select id="inputState" name="State" class="form-control" required>
                                                                                        @if($row->state)
                                                                                        <option value="">Choose</option>
                                                                                        <option value="OD" selected>Odisha</option>
                                                                                        @else
                                                                                        <option value="" selected>Choose</option>
                                                                                        <option value="OD">Odisha</option>
                                                                                        @endif
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <label for="inputState">(In ml)</label>

                                                                        <div class="row">
                                                                            <div class="col-md form-group">
                                                                                <input name="O_p" type="number" class="form-control" value="{{ $row->O_p }}">
                                                                            </div>
                                                                            <div class="col-md form-group">
                                                                                <input name="O_n" type="number" class="form-control" value="{{ $row->O_n }}">
                                                                            </div>
                                                                            <div class="col-md form-group">
                                                                                <input name="A_p" type="number" class="form-control" value="{{ $row->A_p }}">
                                                                            </div>
                                                                            <div class="col-md form-group">
                                                                                <input name="A_n" type="number" class="form-control" value="{{ $row->A_n }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md form-group">
                                                                                <input name="B_p" type="number" class="form-control" value="{{ $row->B_p }}">
                                                                            </div>
                                                                            <div class="col-md form-group">
                                                                                <input name="B_n" type="number" class="form-control" value="{{ $row->B_n }}">
                                                                            </div>
                                                                            <div class="col-md form-group">
                                                                                <input name="AB_p" type="number" class="form-control" value="{{ $row->AB_p }}">
                                                                            </div>
                                                                            <div class="col-md form-group">
                                                                                <input name="AB_n" type="number" class="form-control" value="{{ $row->AB_n }}">
                                                                            </div>

                                                                        </div>


                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- Update Hospital Button -->
                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditRecord{{ $row->id }}">Edit</button>
                                                    <a href="{{ url('/admin/hospital-delete-').Crypt::encrypt($row->id) }}"><button type="submit" class="btn btn-danger btn-sm">Delete</button></a>
                                                </td>
                                            </tr>

                                            @php
                                            $i++;
                                            @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection