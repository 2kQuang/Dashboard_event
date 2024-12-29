@extends('admin.layouts.master')
@section('admin_content')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">Management event</div>
                    <div class="px-4">
                        <a href="{{ route('admin.event.create') }}" class="btn btn-space btn-outline-warning">Create event</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Detail</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{!! $item->id !!}</td>
                                        <td>{!! $item->name !!}</td>
                                        <td>{!! $item->detail !!}</td>
                                        <td class="d-flex" colspan="2">
                                            <a href="{{ route('admin.event.edit', ['event' => $item->id]) }}"
                                                class="btn btn-space btn-outline-warning">Edit</a>
                                            <form action="{{ route('admin.event.destroy', ['event' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-space btn-outline-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
