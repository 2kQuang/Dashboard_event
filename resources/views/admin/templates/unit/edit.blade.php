@extends('admin.layouts.master')
@section('admin_content')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header card-header-divider">Create unit</div>
                    <div class="card-body">
                        <form action="{{ route('admin.unit.update', ['unit' => $item->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Name</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input class="form-control" type="text" data-mask="name" name="name"
                                        placeholder="Name" value="{!! $item->name !!}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 text-center">
                                    <button class="btn btn-space btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
