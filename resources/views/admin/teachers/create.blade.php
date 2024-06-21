@extends('layouts.admin')
@section('title')
  Teachers Create
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-header">
                        <h4> Teachers create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control"  name="name">
                        </div>
                        <div class="form-group">
                            <label> Job</label>
                            <input type="text" class="form-control"  name="job">
                          </div>
                          <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control"  name="description">
                          </div>
                          <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control"  name="image">
                          </div>
                          <div class="form-group">
                            <label>Telegram</label>
                            <input type="text" class="form-control"  name="telegram">
                          </div>
                          <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control"  name="facebook">
                          </div>
                          <div class="form-group">
                            <label>Instgram</label>
                            <input type="text" class="form-control"  name="instgram">
                          </div>
                    </div>

                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
            </div>

        </div>
    </div>

@endsection
