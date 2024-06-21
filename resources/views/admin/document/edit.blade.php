@extends('layouts.admin')
@section('title')
Document edit
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.document.update', $document->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                      <div class="card-header">
                        <h4> Document edit</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control"  name="title" value="{{ $document->title }}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control"  name="description" value="{{ $document->description }}">
                          </div>
                          <div class="form-group">
                            <label>File</label>
                            <input type="file" class="form-control"  name="document">
                          </div>

                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Edit</button>
                      </div>
                    </form>
                  </div>
            </div>

        </div>
    </div>
@endsection
