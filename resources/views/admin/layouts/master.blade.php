<!DOCTYPE html>
<html lang="en">

@include('admin.layouts._head')

<body>
    <div class="be-wrapper be-fixed-sidebar">
        @include('admin.layouts._header')
        @include('admin.layouts._sidebar')
        <div class="be-content">
            @yield('admin_content')
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert" style="top: 10px; right: 0; z-index: 10000;">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
            <div class="icon"><span class="mdi mdi-check"></span></div>
            <div class="message">{{ session('success') }}</div>
        </div>
    @endif
    @include('admin.layouts._script')
</body>

</html>
