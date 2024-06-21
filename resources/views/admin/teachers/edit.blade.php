@extends('layouts.admin')
@section('title')
  Teacher Update
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.teachers.update', $teacher->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                      <div class="card-header">
                        <h4> Teacher update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label> Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $teacher->name }}">
                        </div>

                        <div class="form-group">
                          <label>Job</label>
                          <input type="text" class="form-control"  name="job" value="{{ $teacher->job }}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control"  name="description" value="{{ $teacher->description }}">
                          </div>
                          <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control"  name="image">
                          </div>

                          <div class="form-group">
                            <label>Telegram</label>
                            <input type="text" class="form-control"  name="telegram" value="{{ $teacher->telegram }}">
                          </div>

                          <div class="form-group">
                            <label>facebook</label>
                            <input type="text" class="form-control"  name="facebook" value="{{ $teacher->facebook }}">
                          </div>

                          <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control"  name="instgram" value="{{ $teacher->instgram }}">
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
