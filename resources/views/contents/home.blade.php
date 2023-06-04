@extends('layouts.main')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Dashboard</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="row">
    <!-- Column -->
    {{-- <div class="col-md-12 col-lg-12">
      <div class="card card-hover">
        <div class="box bg-cyan text-center">
          <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
          <h6 class="text-white">Dashboard</h6>
        </div>
      </div>
    </div> --}}
    <div class="col-md-12 col-lg-6">
      <div class="card card-hover">
        <div class="box bg-info text-center">
          <div class="d-flex align-items-center justify-content-center p-3">
            <h1 class="font-light text-white"><i class="mdi mdi-target"></i></h1>
            <div class="ml-5">
              <h6 class="text-white">Alternatives</h6>
              <h4 class="text-white">{{ $alternativeCount }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Column -->
    <div class="col-md-12 col-lg-6">
      <div class="card card-hover">
        <div class="box bg-success text-center">
          <div class="d-flex align-items-center justify-content-center p-3">
            <h1 class="font-light text-white"><i class="mdi mdi-format-list-bulleted"></i></h1>
            <div class="ml-5">
              <h6 class="text-white">Criterias</h6>
              <h4 class="text-white">{{ $criteriaCount }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ============================================================== -->
  <!-- End PAge Content -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Right sidebar -->
  <!-- ============================================================== -->
  <!-- .right-sidebar -->
  <!-- ============================================================== -->
  <!-- End Right sidebar -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection