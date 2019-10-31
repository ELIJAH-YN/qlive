<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/assets/css/backend_css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/backend_css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/backend_css/uniform.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/backend_css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/backend_css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/backend_css/matrix-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/backend_css/matrix-media.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    <link href="{{ asset('/assets/fonts/backend_fonts/css/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/assets/css/backend_css/jquery.gritter.css') }}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('layouts.adminLayout.admin_header')

@include('layouts.adminLayout.admin_sidebar')

@yield('content')

@include('layouts.adminLayout.admin_footer')

<script src="{{ asset('/assets/js/backend_js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/backend_js/jquery.ui.custom.js') }}"></script>
<script src="{{ asset('/assets/js/backend_js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/js/backend_js/jquery.uniform.js') }}"></script>
<script src="{{ asset('/assets/js/backend_js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/js/backend_js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/assets/js/backend_js/jquery.validate.js') }}"></script>
<script src="{{ asset('/assets/js/backend_js/matrix.js') }}"></script>
<script src="{{ asset('/assets/js/backend_js/matrix.form_validation.js') }}"></script>
<script src="{{ asset('/assets/js/backend_js/matrix.tables.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>


</body>
</html>
