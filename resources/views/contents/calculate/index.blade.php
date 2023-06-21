@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Perhitungan</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/matrices">Matriks</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perhitungan</li>
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
          <h5 class="card-title mb-3">Matriks Keputusan</h5>
          <div class="table-responsive mt-3">
            <table id="matriks_keputusan" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                @php
                $keys = array_keys($matrix)
                @endphp

                @foreach ($keys as $key)
                <tr>
                  <td>A{{ $loop->iteration }}</td>
                  @foreach ($matrix[$key] as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Normalisasi Matriks</h5>
          <div class="table-responsive mt-3">
            <table id="normalisasi" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                @php
                $keys = array_keys($normalisasi)
                @endphp

                @foreach ($keys as $key)
                <tr>
                  <td>A{{ $loop->iteration }}</td>
                  @foreach ($normalisasi[$key] as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Jumlah</h5>
          <div class="table-responsive mt-3">
            <table id="sum_normalisasi" class="table table-striped table-bordered">
              <thead>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

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

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Penentuan Nilai Rata-rata Kinerja yang dinormalisasi</h5>
          <div class="table-responsive mt-3">
            <table id="average_value" class="table table-striped table-bordered">
              <thead>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

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

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Penentuan Nilai Variasi Preferensi</h5>
          <div class="table-responsive mt-3">
            <table id="pow" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                @php
                $keys = array_keys($pow)
                @endphp

                @foreach ($keys as $key)
                <tr>
                  <td>A{{ $loop->iteration }}</td>
                  @foreach ($pow[$key] as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Jumlah</h5>
          <div class="table-responsive mt-3">
            <table id="sum_pow" class="table table-striped table-bordered">
              <thead>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

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

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Penentuan Deviasi Nilai Preferensi</h5>
          <div class="table-responsive mt-3">
            <table id="result" class="table table-striped table-bordered">
              <thead>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

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

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

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
            <table id="bobot_kriteria" class="table table-striped table-bordered">
              <thead>
                <tr>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

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

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </tfoot>
            </table>
          </div>

        </div>
        <div class="card-body">
          <h5 class="card-title mb-3">Penentuan Nilai PSI</h5>
          <div class="table-responsive mt-3">
            <table id="psi" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

                    @endfor

                </tr>
              </thead>
              <tbody>

                @php
                $keys = array_keys($psi)
                @endphp

                @foreach ($keys as $key)
                <tr>
                  <td>A{{ $loop->iteration }}</td>
                  @foreach ($psi[$key] as $value)
                  <td>{{ round($value, 4) }}</td>
                  @endforeach
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>Alternatif</th>

                  @for ($i = 0; $i < count($criterias); $i++) <th>C{{ $i + 1 }}</th>

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
                <table class="table table-striped table-bordered">
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
                      <td>A{{ $key }}</td>
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
                <table class="table table-striped table-bordered">
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
                      <td id="key">A{{ $key }}</td>
                      <td id="rank">{{ round($sumPsiRank[$key], 4) }}</td>
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
          <h5 class="card-title mb-3">Perankingan</h5>
          <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td>Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>θ</td>
                </tr>
              </thead>
              <tbody id="table-body">
              </tbody>
              <tfoot>
                <tr>
                  <td>Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>θ</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-3">Perankingan SMA</h5>
          <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td>Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>θ</td>
                </tr>
              </thead>
              <tbody id="table-body-sma">
              </tbody>
              <tfoot>
                <tr>
                  <td>Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>θ</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-3">Perankingan SMK</h5>
          <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td>Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>θ</td>
                </tr>
              </thead>
              <tbody id="table-body-smk">
              </tbody>
              <tfoot>
                <tr>
                  <td>Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>θ</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

        <div class="card-body">
          <h5 class="card-title mb-3">Perankingan MA</h5>
          <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td>Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>θ</td>
                </tr>
              </thead>
              <tbody id="table-body-ma">
              </tbody>
              <tfoot>
                <tr>
                  <td>Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>θ</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

        <div class="card-body">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Kesimpulan :</h4>
            <p>Sekolah yang terpilih menjadi sekolah terbaik berdasarkan beberapa kriteria tertentu adalah
              <b id="firstRankSma"></b> untuk SMA, <b id="firstRankSmk"></b> untuk SMK, dan <b id="firstRankMa"></b>
              untuk MA.
            </p>
            </p>
            <hr>
            <p class="mb-3"><b>Urutan Ranking 1 - 3 :</b></p>
            <p class="m-0" id="first"></p>
            <p class="m-0" id="second"></p>
            <p class="m-0" id="third"></p>
            <hr>
            <p class="mb-3"><b>Urutan Ranking 1 - 3 SMA :</b></p>
            <p class="m-0" id="first-sma"></p>
            <p class="m-0" id="second-sma"></p>
            <p class="m-0" id="third-sma"></p>
            <hr>
            <p class="mb-3"><b>Urutan Ranking 1 - 3 SMK :</b></p>
            <p class="m-0" id="first-smk"></p>
            <p class="m-0" id="second-smk"></p>
            <p class="m-0" id="third-smk"></p>
            <hr>
            <p class="mb-3"><b>Urutan Ranking 1 - 3 MA :</b></p>
            <p class="m-0" id="first-ma"></p>
            <p class="m-0" id="second-ma"></p>
            <p class="m-0" id="third-ma"></p>
          </div>
        </div>

        <div class="card-body">
          <a href="/matrices" class="btn btn-danger"><i class="mdi mdi-arrow-left-bold"></i> Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  $('#matriks_keputusan').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#normalisasi').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#sum_normalisasi').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#average_value').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#pow').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#sum_pow').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#result').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#bobot_kriteria').DataTable({
    'ordering': false,
    'paging': false
  });
  $('#psi').DataTable({
    'ordering': false,
    'paging': false
  });

  const rank = document.querySelectorAll('#rank')
  const firstRankSma = document.querySelector('#firstRankSma')
  const firstRankSmk = document.querySelector('#firstRankSmk')
  const firstRankMa = document.querySelector('#firstRankMa')
  const first = document.querySelector('#first')
  const second = document.querySelector('#second')
  const third = document.querySelector('#third')
  const firstSma = document.querySelector('#first-sma')
  const secondSma = document.querySelector('#second-sma')
  const thirdSma = document.querySelector('#third-sma')
  const firstSmk = document.querySelector('#first-smk')
  const secondSmk = document.querySelector('#second-smk')
  const thirdSmk = document.querySelector('#third-smk')
  const firstMa = document.querySelector('#first-ma')
  const secondMa = document.querySelector('#second-ma')
  const thirdMa = document.querySelector('#third-ma')

  let listAlternative = []
  rank.forEach(e => {
    listAlternative.push({
      'code': e.previousElementSibling.innerHTML,
      'value': e.innerHTML
    })
  });

  let dbAlternative = []
  $.get('/matrices/alternatives', function (data) {
    data.alternatives.forEach(e => {
      dbAlternative.push({
        'key': e.id,
        'code': e.code,
        'name': e.name
      })
    });

    listAlternative.forEach(e => {
      dbAlternative.forEach(el => {
        if (e.code == el.code) {
          e.key = el.key
          e.name = el.name
        }
      });
    });

    let listAlternativeSma = listAlternative.filter(e => e.name.includes('SMA'))
    let listAlternativeSmk = listAlternative.filter(e => e.name.includes('SMK') || e.name.includes('SMTK'))
    let listAlternativeMa = listAlternative.filter(e => e.name.includes(' MA'))

    const tableBody = document.querySelector('#table-body')
    listAlternative.forEach(e => {
      tableBody.innerHTML += `
        <tr>
          <td>A${e.key}</td>
          <td>${e.name}</td>
          <td>${e.value}</td>
        </tr>
      `
    });

    const tableBodySma = document.querySelector('#table-body-sma')
    listAlternativeSma.forEach(e => {
      tableBodySma.innerHTML += `
        <tr>
          <td>A${e.key}</td>
          <td>${e.name}</td>
          <td>${e.value}</td>
        </tr>
      `
    });

    const tableBodySmk = document.querySelector('#table-body-smk')
    listAlternativeSmk.forEach(e => {
      tableBodySmk.innerHTML += `
        <tr>
          <td>A${e.key}</td>
          <td>${e.name}</td>
          <td>${e.value}</td>
        </tr>
      `
    });

    const tableBodyMa = document.querySelector('#table-body-ma')
    listAlternativeMa.forEach(e => {
      tableBodyMa.innerHTML += `
        <tr>
          <td>A${e.key}</td>
          <td>${e.name}</td>
          <td>${e.value}</td>
        </tr>
      `
    });

    firstRankSma.innerHTML = listAlternativeSma[0].name
    firstRankSmk.innerHTML = listAlternativeSmk[0].name
    firstRankMa.innerHTML = listAlternativeMa[0].name
    first.innerHTML = `1. ${listAlternative[0].name} (${listAlternative[0].value})`
    second.innerHTML = `2. ${listAlternative[1].name} (${listAlternative[1].value})`
    third.innerHTML = `3. ${listAlternative[2].name} (${listAlternative[2].value})`
    firstSma.innerHTML = `1. ${listAlternativeSma[0].name} (${listAlternativeSma[0].value})`
    secondSma.innerHTML = `2. ${listAlternativeSma[1].name} (${listAlternativeSma[1].value})`
    thirdSma.innerHTML = `3. ${listAlternativeSma[2].name} (${listAlternativeSma[2].value})`
    firstSmk.innerHTML = `1. ${listAlternativeSmk[0].name} (${listAlternativeSmk[0].value})`
    secondSmk.innerHTML = `2. ${listAlternativeSmk[1].name} (${listAlternativeSmk[1].value})`
    thirdSmk.innerHTML = `3. ${listAlternativeSmk[2].name} (${listAlternativeSmk[2].value})`
    firstMa.innerHTML = `1. ${listAlternativeMa[0].name} (${listAlternativeMa[0].value})`
    secondMa.innerHTML = `2. ${listAlternativeMa[1].name} (${listAlternativeMa[1].value})`
    thirdMa.innerHTML = `3. ${listAlternativeMa[2].name} (${listAlternativeMa[2].value})`
  });
</script>
@endsection