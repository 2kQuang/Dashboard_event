<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-fav.png') }}">
    <title>Beagle</title>

    @php
        $css = [
            '/lib/perfect-scrollbar/css/perfect-scrollbar.css',
            '/lib/material-design-icons/css/material-design-iconic-font.min.css',
            '/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css',
            '/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css',
            '/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css',
            '/lib/jqvmap/jqvmap.min.css',
            '/lib/datetimepicker/css/bootstrap-datetimepicker.min.css',
        ];

        if (request()->routeIs('admin.account.edit') || request()->routeIs('admin.account.create')) {
            $css = array_merge($css, [
                '/lib/select2/css/select2.min.css',
                '/lib/bootstrap-slider/css/bootstrap-slider.min.css',
            ]);
        }

        $css = array_merge($css, ['/css/app.css']);
    @endphp

    @foreach ($css as $file)
        <link rel="stylesheet" type="text/css" href="{{ asset('assets' . $file) }}">
    @endforeach

</head>
