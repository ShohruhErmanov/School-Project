@extends('layouts.admin')

@section('title')
    Documents Table
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
                        <h4>Documents Table</h4>
                        <div class="card-header-form">
                            <a href="{{ route('admin.document.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Document</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach ($documents as $document)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $document->title }}</td>
                                            <td>{{ $document->description }}</td>
                                            <td>{{ $document->document }}</td>
                                            <td>{{ $document->created_at }}</td>
                                            <td class="d-flex" style="column-gap: 10px;">
                                                <a href="#!" class="btn btn-warning ">Show</a>
                                                <a href="{{ route('admin.document.edit', $document->id) }}"
                                                    class="btn btn-info">Update</a>
                                                <form action="{{ route('admin.document.destroy', $document->id) }}"
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
