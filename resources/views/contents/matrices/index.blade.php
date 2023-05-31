@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Matrices</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Matrices</li>
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
          <h5 class="card-title mb-3">Matrix Data</h5>
          <a href="/count" class="btn btn-success"><i class="mdi mdi-calculator"></i> Calculate</a>
          <a href="/matrices/create" class="btn btn-primary"><i class="mdi mdi-library-plus"></i> Add Data</a>
          <form action="/matrices/truncate" method="POST" class="d-inline-block">
            @csrf
            <button type="submit" class="btn btn-danger"><i class="mdi mdi-delete"></i>
              Delete Data</button>
          </form>
          <div class="table-responsive mt-3">
            <table id="zero_config" class="table table-striped table-bordered matrix-datatable">
              <thead>
                <tr>
                  <th>No.</th>
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
                  <td>{{ $loop->iteration }}</td>
                  <td>Alternatif {{ $loop->iteration }}</td>
                  @foreach ($matrix[$key] as $value)
                  <td>{{ $value }}</td>
                  @endforeach
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>{{ $criterias[$i]->name }}</th>

                    @endfor
                </tr>
              </tfoot>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
{{-- <script>
  $(function () {

    var table = $('.matrix-datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ordering: true,
        ajax: {
          url: "{{ url()->current() }}"
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'alternative', name: 'alternative.name'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });

  });
</script> --}}
@endsection