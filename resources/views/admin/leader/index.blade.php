@extends('layouts.admin')

@section('title')
    Leader Table
@endsection
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">

                    @if (session('seccess'))
                        <div class="alert alert-primary alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('seccess') }}
                            </div>
                        </div>
                    @endif

                    <div class="card-header">
                        <h4>Leader Table</h4>
                        <div class="card-header-form">
                            <a href="{{ route('admin.leader.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Acceptance</th>
                                        <th>Image</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach ( $leaders as  $leader)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $leader->title }}</td>
                                            <td>{{ $leader->name }}</td>
                                            <td>{{ $leader->contact }}</td>
                                            <td>{{ $leader->acceptance }}</td>
                                            <td>
                                                <img src="/images/leaders/{{ $leader->image }}" alt="" width="100">
                                            </td>
                                            <td>{{ $leader->created_at }}</td>
                                            <td class="d-flex ">
                                                <a href="{{ route('admin.leader.show', $leader->id) }}" class="btn btn-warning ">Show</a>
                                                <a href="{{ route('admin.leader.edit', $leader->id) }}"
                                                    class="btn btn-info">Update</a>
                                                <form action="{{ route('admin.leader.destroy', $leader->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger "
                                                        onclick="return confirm('o\'chirishni hohlaysizmi?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
