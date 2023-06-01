@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Calculate</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/matrices">Matrices</a></li>
            <li class="breadcrumb-item active" aria-current="page">Calculate</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-3">Matrix Keputusan</h5>
          <div class="table-responsive mt-3">
            <table id="matriks_keputusan" class="table table-striped table-bordered matrix-datatable">
              <thead>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                @php
                $keys = array_keys($matrix)
                @endphp

                @foreach ($keys as $key)
                <tr>
                  <td>Alternatif {{ $loop->iteration }}</td>
                  @foreach ($matrix[$key] as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Normalisasi Matriks</h5>
          <div class="table-responsive mt-3">
            <table id="normalisasi" class="table table-striped table-bordered matrix-datatable">
              <thead>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                @php
                $keys = array_keys($normalisasi)
                @endphp

                @foreach ($keys as $key)
                <tr>
                  <td>Alternatif {{ $loop->iteration }}</td>
                  @foreach ($normalisasi[$key] as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Jumlah</h5>
          <div class="table-responsive mt-3">
            <table id="sum_normalisasi" class="table table-striped table-bordered matrix-datatable">
              <thead>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                <tr>
                  @foreach ($sumEachCriteria as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>

              </tbody>
              <tfoot>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Penentuan Nilai Rata-rata Kinerja yang dinormalisasi</h5>
          <div class="table-responsive mt-3">
            <table id="average_value" class="table table-striped table-bordered matrix-datatable">
              <thead>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                <tr>
                  @foreach ($averageValue as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>

              </tbody>
              <tfoot>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Penentuan Nilai Variasi Preferensi</h5>
          <div class="table-responsive mt-3">
            <table id="pow" class="table table-striped table-bordered matrix-datatable">
              <thead>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                @php
                $keys = array_keys($pow)
                @endphp

                @foreach ($keys as $key)
                <tr>
                  <td>Alternatif {{ $loop->iteration }}</td>
                  @foreach ($pow[$key] as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Jumlah</h5>
          <div class="table-responsive mt-3">
            <table id="sum_pow" class="table table-striped table-bordered matrix-datatable">
              <thead>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                <tr>
                  @foreach ($sumPow as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>

              </tbody>
              <tfoot>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Penentuan Deviasi Nilai Preferensi</h5>
          <div class="table-responsive mt-3">
            <table id="result" class="table table-striped table-bordered matrix-datatable">
              <thead>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                    <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  @foreach ($result as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                  <td>{{ round($sumResult, 4) }}</td>
                </tr>

              </tbody>
              <tfoot>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                    <th>Jumlah</th>
                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Penentuan Bobot Kriteria</h5>
          <div class="table-responsive mt-3">
            <table id="bobot_kriteria" class="table table-striped table-bordered matrix-datatable">
              <thead>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                <tr>
                  @foreach ($criteriaWeight as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>

              </tbody>
              <tfoot>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Penentuan Nilai PSI</h5>
          <div class="table-responsive mt-3">
            <table id="psi" class="table table-striped table-bordered matrix-datatable">
              <thead>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                @php
                $keys = array_keys($psi)
                @endphp

                @foreach ($keys as $key)
                <tr>
                  <td>Alternatif {{ $loop->iteration }}</td>
                  @foreach ($psi[$key] as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="card-body">
              <h5 class="card-title mb-3">Nilai PSI</h5>
              <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered matrix-datatable">
                  <thead>
                    <tr>
                      <td>Alternatif</td>
                      <td>θ</td>
                    </tr>
                  </thead>
                  <tbody>

                    @php
                    $keys = array_keys($sumPsi)
                    @endphp

                    @foreach ($keys as $key)
                    <tr>
                      <td>Alternatif {{ $key }}</td>
                      <td>{{ round($sumPsi[$key], 4) }}</td>
                    </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                      <td>Alternatif</td>
                      <td>θ</td>
                    </tr>
                  </tfoot>
                </table>
              </div>

            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card-body">
              <h5 class="card-title mb-3">Perankingan</h5>
              <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered matrix-datatable">
                  <thead>
                    <tr>
                      <td>Alternatif</td>
                      <td>θ</td>
                    </tr>
                  </thead>
                  <tbody>

                    @php
                    $keys = array_keys($sumPsiRank)
                    @endphp

                    @foreach ($keys as $key)
                    <tr>
                      <td>Alternatif {{ $key }}</td>
                      <td>{{ round($sumPsiRank[$key], 4) }}</td>
                    </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                      <td>Alternatif</td>
                      <td>θ</td>
                    </tr>
                  </tfoot>
                </table>
              </div>

            </div>
          </div>
        </div>
        <div class="card-body">
          <a href="/matrices" class="btn btn-danger">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  $('#matriks_keputusan').DataTable();
  $('#normalisasi').DataTable();
  $('#sum_normalisasi').DataTable();
  $('#average_value').DataTable();
  $('#pow').DataTable();
  $('#sum_pow').DataTable();
  $('#result').DataTable();
  $('#bobot_kriteria').DataTable();
  $('#psi').DataTable();
</script>
@endsection