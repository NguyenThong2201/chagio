
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <base href="{{asset('')}}">
    <link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="admin/assets/styles.css" rel="stylesheet" media="screen">
    <link href="admin/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <link href="admin/vendors/datepicker.css" rel="stylesheet" media="screen">
    <link href="admin/vendors/uniform.default.css" rel="stylesheet" media="screen">
    <link href="admin/vendors/chosen.min.css" rel="stylesheet" media="screen">
    <link href="admin/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css">
    <script src="admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel="icon" href="https://bonamatcha.vn/wp-content/uploads/2017/10/favicon-300x300.png" sizes="32x32">
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
 <body>
    <!-- navbar top -->
    @include('admin.header')
    <!-- end navbar top -->
    <div class="container-fluid">
        <div class="row-fluid">
            @include('admin.menu')
            <!--/span-->
            @yield('content')
        </div>
        <hr>
        <footer>
            <p>&copy; Vincent Gabriel 2013</p>
        </footer>
    </div>
    <!--/.fluid-container-->
    

    <link href="admin/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
    <script src="admin/vendors/jquery-1.9.1.js"></script>
    <script src="admin/vendors/jquery.uniform.min.js"></script>
    <script src="admin/vendors/chosen.jquery.min.js"></script>
    <script src="admin/vendors/bootstrap-datepicker.js"></script>
    <script src="admin/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
    <script src="admin/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>
    <script src="admin/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script type="text/javascript" src="admin/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="admin/assets/form-validation.js"></script>
    <script src="admin/assets/scripts.js"></script>
    <script src="admin/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="admin/assets/DT_bootstrap.js"></script>
    <!--/.fluid-container-->
    <script src="admin/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="admin/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="admin/vendors/ckeditor/ckeditor.js"></script>
    <script src="admin/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

    <script src="admin/vendors/ckeditor/ckeditor.js"></script>
    <script src="admin/vendors/ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript" src="admin/vendors/tinymce/js/tinymce/tinymce.min.js"></script>

    <script src="admin/assets/scripts.js"></script>
    <script>
    $(function() {
        // Easy pie charts
        $('.chart').easyPieChart({animate: 1000});
    });
    $(function() {
        // Bootstrap
        $('#bootstrap-editor').wysihtml5();

        // Ckeditor standard
        $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
            { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
            [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
            { name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
        ]});
        $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
    });
    // Tiny MCE
    tinymce.init({
        selector: "#tinymce_full",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ]
    });
    </script>
    @yield('script')
</body>
</html>

