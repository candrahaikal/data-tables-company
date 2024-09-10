@extends('layouts.main')

@section('title', 'Blog')

@section('content')
    <!-- begin page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Overview</h4>

                <!-- begin breadcrumb -->
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                        <li class="breadcrumb-item active">Company</li>
                    </ol>
                </div>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- begin content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Company</h4>
                    <p class="card-title-desc">
                        This page presents a comprehensive overview of all available data, displayed in an interactive
                        and sortable DataTable format. Each row represents a unique data, providing key details such as
                        name, description, and status. Utilize the <b>column visibility, sorting, and column
                            search bar</b> features to
                        customize your view and quickly access the specific information you need.
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th class="data-medium">Name</th>
                                <th>Position</th>
                                <th>Age</th>
                                <th class="data-long">Description</th>
                                <th>Created At</th>
                                <th>Created Id</th>
                                <th>Updated At</th>
                                <th>Updated Id</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>678</td>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>28</td>
                                <td>She's from Singapore</td>
                                <td>7 August 2024, 16:03</td>
                                <td>1</td>
                                <td>7 August 2024, 16:03</td>
                                <td>1</td>
                                <td value="">
                                    <a class="btn btn-success">Aktif</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary">Edit</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>678</td>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>28</td>
                                <td>She's from Singapore</td>
                                <td>7 August 2024, 16:03</td>
                                <td>1</td>
                                <td>7 August 2024, 16:03</td>
                                <td>1</td>
                                <td value="">
                                    <a class="btn btn-danger">Non Aktif</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary">Edit</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>678</td>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>28</td>
                                <td>She's from Singapore</td>
                                <td>7 August 2024, 16:03</td>
                                <td>1</td>
                                <td>7 August 2024, 16:03</td>
                                <td>1</td>
                                <td value="">
                                    <a class="btn btn-success">Aktif</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary">Edit</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>678</td>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>28</td>
                                <td>She's from Singapore</td>
                                <td>7 August 2024, 16:03</td>
                                <td>1</td>
                                <td>7 August 2024, 16:03</td>
                                <td>1</td>
                                <td value="">
                                    <a class="btn btn-danger">Non Aktif</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary">Edit</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>678</td>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>28</td>
                                <td>She's from Singapore</td>
                                <td>7 August 2024, 16:03</td>
                                <td>1</td>
                                <td>7 August 2024, 16:03</td>
                                <td>1</td>
                                <td value="">
                                    <a class="btn btn-danger">Non Aktif</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary">Edit</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th class="data-medium">Name</th>
                                <th>Position</th>
                                <th>Age</th>
                                <th class="data-long">Description</th>
                                <th>Created At</th>
                                <th>Created Id</th>
                                <th>Updated At</th>
                                <th>Updated Id</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- FAB add starts -->
    <div id="floating-add-button">
        <a href="{{ route('getAddCompany') }}" target="_blank">
            <i class="fas fa-plus"></i>
        </a>
    </div>
    <!-- FAB add ends -->
@endsection

@section('script')
    {{-- add additional script here... --}}
@endsection
