@extends('student.master')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Student Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">My Courses</p>
                                <h4 class="my-1">6</h4>
                            </div>
                            <div class="ms-auto"><i class='bx bx-book-open fs-1 text-primary'></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Attendance</p>
                                <h4 class="my-1">85%</h4>
                            </div>
                            <div class="ms-auto"><i class='bx bx-check-circle fs-1 text-success'></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Assignments</p>
                                <h4 class="my-1">3 Pending</h4>
                            </div>
                            <div class="ms-auto"><i class='bx bx-task fs-1 text-warning'></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Welcome, {{ auth()->user()->name }}!</h5>
                <p class="text-secondary">You are logged in as <strong>Student</strong>.</p>
            </div>
        </div>

    </div>
</div>
@endsection