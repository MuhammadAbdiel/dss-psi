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
              <h6 class="text-white">Alternatif</h6>
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
              <h6 class="text-white">Kriteria</h6>
              <h4 class="text-white">{{ $criteriaCount }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive mt-3">
            <table id="keterangan_c1" class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th colspan="2">C1 (Jurusan yang ditawarkan)</th>
                </tr>
                <tr>
                  <td>Nilai</td>
                  <td>Keterangan</td>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <td>1</td>
                  <td>Sangat Kurang</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Kurang</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Cukup</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Baik</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Sangat Baik</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive mt-3">
            <table id="keterangan_c2" class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th colspan="2">C2 (Prestasi yang sudah dicapai)</th>
                </tr>
                <tr>
                  <td>Nilai</td>
                  <td>Keterangan</td>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <td>1</td>
                  <td>Sangat Kurang</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Kurang</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Cukup</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Baik</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Sangat Baik</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive mt-3">
            <table id="keterangan_c3" class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th colspan="2">C3 (Ekstra Kurikuler yang ditawarkan)</th>
                </tr>
                <tr>
                  <td>Nilai</td>
                  <td>Keterangan</td>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <td>3</td>
                  <td>Sangat Kurang</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Kurang</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Cukup</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Baik</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Sangat Baik</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive mt-3">
            <table id="keterangan_c4" class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th colspan="2">C4 (Akreditasi yang sudah diperoleh)</th>
                </tr>
                <tr>
                  <td>Nilai</td>
                  <td>Keterangan</td>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <td>2</td>
                  <td>Sangat Kurang</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Kurang</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Cukup</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Baik</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Sangat Baik</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive mt-3">
            <table id="keterangan_c5" class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th colspan="2">C5 (Fasilitas yang disediakan)</th>
                </tr>
                <tr>
                  <td>Nilai</td>
                  <td>Keterangan</td>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <td>3</td>
                  <td>Sangat Kurang</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Kurang</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Cukup</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Baik</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Sangat Baik</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive mt-3">
            <table id="keterangan_c6" class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th colspan="2">C6 (Biaya Pendaftaran)</th>
                </tr>
                <tr>
                  <td>Nilai</td>
                  <td>Keterangan</td>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <td>Rp. {{ number_format(400000) }}</td>
                  <td>Sangat Kurang</td>
                </tr>
                <tr>
                  <td>Rp. {{ number_format(300000) }}</td>
                  <td>Kurang</td>
                </tr>
                <tr>
                  <td>Rp. {{ number_format(200000) }}</td>
                  <td>Cukup</td>
                </tr>
                <tr>
                  <td>Rp. {{ number_format(100000) }}</td>
                  <td>Baik</td>
                </tr>
                <tr>
                  <td>Rp. {{ number_format(50000) }}</td>
                  <td>Sangat Baik</td>
                </tr>
              </tbody>
            </table>
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

@section('script')
<script>
  $('#keterangan_c1').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#keterangan_c2').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#keterangan_c3').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#keterangan_c4').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#keterangan_c5').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#keterangan_c6').DataTable({
    'ordering': false,
    'paging': false
  });
</script>
@endsection