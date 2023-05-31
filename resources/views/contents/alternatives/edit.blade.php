@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Edit Alternative</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/alternatives">Alternatives</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Alternative</li>
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
        <form action="/alternatives/{{ $alternative->id }}" method="POST" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card-body">
            <h4 class="card-title mb-3">Edit Alternative</h4>
            <div class="form-group row">
              <label for="name" class="col-sm-3 text-left control-label col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                  placeholder="Name Here" value="{{ old('name', $alternative->name) }}">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="border-top">
            <div class="card-body">
              <a href="/alternatives" class="btn btn-danger">Back</a>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection