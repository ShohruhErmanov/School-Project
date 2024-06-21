@extends('layouts.admin')

@section('title')
    Holiday Table
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
                        <h4>Holiday Table</h4>
                        <div class="card-header-form">
                            <a href="{{ route('admin.holiday.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach ($holidays as $holiday)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $holiday->title }}</td>
                                            <td>
                                                <img src="/images/holidays/{{ $holiday->image }}" alt="" width="100">
                                            </td>
                                            <td>{{ $holiday->description }}</td>
                                            <td>{{ $holiday->created_at->format('Y-m-d') }}</td>
                                            <td class="d-flex" style="column-gap: 10px;">
                                                <a href="#!" class="btn btn-warning ">Show</a>
                                                <a href="{{ route('admin.holiday.edit', $holiday->id) }}"
                                                    class="btn btn-info">Update</a>
                                                <form action="{{ route('admin.holiday.destroy', $holiday->id) }}"
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
