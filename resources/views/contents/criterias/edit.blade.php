@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Edit Criteria</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/criterias">Criterias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Criteria</li>
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
        <form action="/criterias/{{ $criteria->id }}" method="POST" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card-body">
            <h4 class="card-title mb-3">Edit Criteria</h4>
            <div class="form-group row">
              <label for="name" class="col-sm-3 text-left control-label col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                  placeholder="Name Here" value="{{ old('name', $criteria->name) }}">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 m-t-15">Type</label>
              <div class="col-md-9">
                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="type">
                  <option>Select Type</option>

                  @if ($criteria->type == 'benefit')
                  <option value="benefit" selected>Benefit</option>
                  <option value="cost">Cost</option>
                  @else
                  <option value="benefit">Benefit</option>
                  <option value="cost" selected>Cost</option>
                  @endif

                </select>
              </div>
            </div>
          </div>
          <div class="border-top">
            <div class="card-body">
              <a href="/criterias" class="btn btn-danger">Back</a>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection