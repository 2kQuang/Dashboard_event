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

    @include('admin.layouts._script')
</body>

</html>
