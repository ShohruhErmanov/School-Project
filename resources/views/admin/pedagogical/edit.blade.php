@extends('layouts.admin')
@section('title')
Pedagogical Update
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.pedagogical.update', $pedagogical->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                      <div class="card-header">
                        <h4> Pedagogical update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Number</label>
                          <input type="number" class="form-control"  name="number" value="{{ $pedagogical->number }}">
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control"  name="title" value="{{ $pedagogical->title }}">
                          </div>

                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>

        </div>
    </div>
@endsection
