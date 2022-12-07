@extends('admin.frontend.layouts.main')

<!-- Add Title -->
@push('title')
<title> Admin - donor</title>
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
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Phone No. - Status</th>

                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>Blood Group</th>
                                                <th>Unit</th>
                                                <th>Address</th>

                                                <th>State</th>
                                                <th>City</th>
                                                <th>Term & Condition</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i=1;
                                            @endphp
                                            @foreach($donor as $row)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ substr_replace($row->password,'...',20) }}</td>
                                                <td>{{ $row->phone. " - " }} @if($row->visible == 'v')
                                                    <i class="fas fa-eye"></i>

                                                    @else
                                                    <i class="fas fa-eye-slash"></i>

                                                    @endif
                                                </td>


                                                <td>{{ $row->gender }}</td>
                                                <td>{{ $row->age }}</td>

                                                <td>
                                                    @if($row->blood_gr == 'AB_p' || $row->blood_gr == 'AB_n' )

                                                    @if(substr($row->blood_gr,2) == '_p')
                                                    {{ substr_replace($row->blood_gr,'+','2') }}
                                                    @else
                                                    {{ substr_replace($row->blood_gr,'-','2') }}
                                                    @endif

                                                    @else
                                                    @if(substr($row->blood_gr,1) == '_p')
                                                    {{ substr_replace($row->blood_gr,'+','1') }}
                                                    @else
                                                    {{ substr_replace($row->blood_gr,'-','1') }}
                                                    @endif

                                                    @endif

                                                </td>

                                                <td>{{ $row->unit }}</td>
                                                <td>{{ $row->address }}</td>

                                                <td>@if($row->state == 'OD')
                                                    {{ 'Odisha' }}
                                                    @else
                                                    {{ 'null' }}
                                                    @endif
                                                </td>
                                                <td>{{ $row->city }}</td>
                                                <td> @if($row->t_c == '1' )
                                                    <span class="btn btn-success btn-sm" style="background-color: #32CD32;border-radius: 20px;">Agree</span>
                                                    @endif

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