@php
    $script = [
        '/lib/jquery/jquery.min.js',
        '/lib/perfect-scrollbar/js/perfect-scrollbar.min.js',
        '/lib/bootstrap/dist/js/bootstrap.bundle.min.js',
        '/lib/datatables/datatables.net/js/jquery.dataTables.js',
        '/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js',
        '/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js',
        '/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js',
        '/lib/datatables/jszip/jszip.min.js',
        '/lib/datatables/pdfmake/pdfmake.min.js',
        '/lib/datatables/pdfmake/vfs_fonts.js',
        '/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js',
        '/lib/datatables/datatables.net-buttons/js/buttons.print.min.js',
        '/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js',
        '/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js',
        '/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js',
        '/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
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

    if (request()->routeIs('admin.account.edit') || request()->routeIs('admin.account.create')) {
        $script = array_merge($script, [
            '/lib/jquery.nestable/jquery.nestable.js',
            '/lib/moment.js/min/moment.min.js',
            '/lib/datetimepicker/js/bootstrap-datetimepicker.min.js',
            '/lib/select2/js/select2.min.js',
            '/lib/select2/js/select2.full.min.js',
            '/lib/bootstrap-slider/bootstrap-slider.min.js',
            '/lib/bs-custom-file-input/bs-custom-file-input.js',
        ]);
    }

    if (request()->routeIs('admin.event.edit') || request()->routeIs('admin.event.create')) {
        $script = array_merge($script, [
            '/lib/summernote/summernote-bs4.min.js',
            '/lib/summernote/summernote-ext-beagle.js',
        ]);
    }

    $script = array_merge($script, ['/js/app.js']);
@endphp

@foreach ($script as $file)
    <script src="{{ asset('assets' . $file) }}" type="text/javascript"></script>
@endforeach


<script type="text/javascript">
    $(document).ready(function() {
        App.init();
        App.dashboard();
    });
</script>


@if (request()->routeIs(
        'admin.account.index',
        'admin.category.index',
        'admin.class.index',
        'admin.event.index',
        'admin.facutly.index',
        'admin.role.index',
        'admin.unit.index'))
    <script type="text/javascript">
        $(document).ready(function() {
            App.init();
            App.dataTables();
        });
    </script>
@endif

@if (request()->routeIs('admin.account.edit') || request()->routeIs('admin.account.create'))
    <script type="text/javascript">
        $(document).ready(function() {
            App.init();
            App.formElements();
        });
    </script>
@endif



@if (request()->routeIs('admin.event.edit') || request()->routeIs('admin.event.create'))
    <script type="text/javascript">
        $(document).ready(function() {
            // Initialize Summernote
            $('#summernote').summernote({
                tabsize: 2,
                height: 300, // Set editor height
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endif



<script>
    setTimeout(() => {
        let alert = document.querySelector('.alert');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');
        }
    }, 3000);
</script>
