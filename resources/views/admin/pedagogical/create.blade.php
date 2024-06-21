@extends('layouts.admin')
@section('title')
  Pedagogical Create
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.pedagogical.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-header">
                        <h4> Pedagogical create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                            <label> Number</label>
                            <input type="number" class="form-control"  name="number">
                          </div>
                          <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control"  name="title">
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
