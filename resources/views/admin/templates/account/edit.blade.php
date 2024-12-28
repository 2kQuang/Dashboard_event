@extends('admin.layouts.master')
@section('admin_content')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header card-header-divider">Edit Account<span class="card-subtitle">Current account name: {!! $item->name !!}</span></div>
                    <div class="card-body">
                        <form action="{{ route('admin.account.update', ['account' => $item->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Name</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input class="form-control" type="text" data-mask="name" name="name" value="{!! $item->name !!}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Email</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input class="form-control" type="email" data-mask="name" name="email" value="{!! $item->email !!}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Password New</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input class="form-control" type="password" data-mask="password" name="password" placeholder="Fill in if you want to change password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Small</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="select2 select2-sm" name="role_id">
                                        @foreach ($roles as $role)
                                            <option value="{!! $role->id !!}"
                                                {{ $item->role->id == $role->id ? 'selected' : '' }}>{!! $role->name !!}
                                            </option>
                                        @endforeach
                                    </select>
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
