@php
    $script = [
        '/lib/jquery/jquery.min.js',
        '/lib/perfect-scrollbar/js/perfect-scrollbar.min.js',
        '/lib/bootstrap/dist/js/bootstrap.bundle.min.js',
        '/js/app.js',
        '/lib/jquery-flot/jquery.flot.js',
        '/lib/jquery-flot/jquery.flot.pie.js',
        '/lib/jquery-flot/jquery.flot.time.js',
        '/lib/jquery-flot/jquery.flot.resize.js',
        '/lib/jquery-flot/plugins/jquery.flot.orderBars.js',
        '/lib/jquery-flot/plugins/curvedLines.js',
        '/lib/jquery-flot/plugins/jquery.flot.tooltip.js',
        '/lib/jquery.sparkline/jquery.sparkline.min.js',
        '/lib/countup/countUp.min.js',
        '/lib/jquery-ui/jquery-ui.min.js',
        '/lib/jqvmap/jquery.vmap.min.js',
        '/lib/jqvmap/maps/jquery.vmap.world.js',
    ];
@endphp

@foreach ($script as $file)
    <script src="{{ asset('assets' . $file) }}" type="text/javascript"></script>
@endforeach


<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        App.init();
        App.dashboard();
    });
</script>
