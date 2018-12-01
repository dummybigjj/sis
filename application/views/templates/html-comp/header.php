<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Student Information System">
    <meta name="keywords" content="student information system">
    <title> Student Information System </title>

    <!-- Vendor styles-->
    <!-- Animate.CSS-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/animate.css/animate.css'); ?>">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Ionicons-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/ionicons/css/ionicons.css'); ?>">
    <!-- fontastic icons -->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/fontastic/styless.css'); ?>">
    <!-- Material Colors-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/material-colors/dist/colors.css'); ?>">
    <!-- Dragula-->
    <!-- <link rel="stylesheet" href="<?php //echo base_url('application/assets/vendor/dragula/dist/dragula.css'); ?>"> -->
    

    <!-- Datatables-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/datatables.net-keytable-bs/css/keyTable.bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css'); ?>">

    <!-- FooTable-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/footable/css/footable.core.css'); ?>">
    <!-- Datepicker-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css'); ?>">
    <!-- Select2-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/select2/dist/css/select22.css'); ?>">
    <!-- Clockpicker-->
    <link rel="stylesheet" href="<?php  echo base_url('application/assets/vendor/clockpicker/dist/bootstrap-clockpicker.css'); ?>">
    <!-- Range Slider-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/nouislider/distribute/nouislider.min.css'); ?>">
    <!-- ColorPicker-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css'); ?>">
    <!-- Multiselect-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/multiselect/css/multi-select.css'); ?>">
    <!-- Sweet Alert-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/vendor/sweetalert/dist/sweetalert.css'); ?>">

    <!-- JQUERY DATETIME PICKER -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/jquery/jquery.datetimepicker.css'); ?>">


    <!-- Application styles-->
    <link rel="stylesheet" href="<?php echo base_url('application/assets/css/app.css'); ?>">

    <!-- Modernizr-->
    <script src="<?php echo base_url('application/assets/vendor/modernizr/modernizr.custom.js'); ?>"></script>
    <!-- PaceJS-->
    <script src="<?php echo base_url('application/assets/vendor/pace-progress/pace.min.js'); ?>"></script>
    <!-- jQuery-->
    <script src="<?php echo base_url('application/assets/vendor/jquery/dist/jquery.js'); ?>"></script>
    <!-- Bootstrap-->
    <script src="<?php echo base_url('application/assets/vendor/popper.js/dist/umd/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <!-- Material Colors-->
    <script src="<?php echo base_url('application/assets/vendor/material-colors/dist/colors.js'); ?>"></script>
    <!-- Screenfull-->
    <script src="<?php echo base_url('application/assets/vendor/screenfull/dist/screenfull.js'); ?>"></script>
    <!-- jQuery Localize-->
    <script src="<?php echo base_url('application/assets/vendor/jquery-localize/dist/jquery.localize.js'); ?>"></script>
    <!-- Dragula-->
    <!-- <script src="<?php //echo base_url('application/assets/vendor/dragula/dist/dragula.js'); ?>"></script> -->

    <!-- Datatables-->
    <script src="<?php echo base_url('application/assets/vendor/datatables.net/js/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/datatables.net-buttons/js/buttons.colVis.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js'); ?>"></script>

    <!-- Sparkline-->
    <script src="<?php echo base_url('application/assets/vendor/jquery-sparkline/jquery.sparkline.js'); ?>"></script>
    <!-- jQuery Knob charts-->
    <script src="<?php echo base_url('application/assets/vendor/jquery-knob/js/jquery.knob.js'); ?>"></script>
    <!-- FooTable-->
    <script src="<?php echo base_url('application/assets/vendor/footable/dist/footable.all.min.js'); ?>"></script>
    <!-- Easypie Charts-->
    <script src="<?php echo base_url('application/assets/vendor/easy-pie-chart/dist/jquery.easypiechart.js'); ?>"></script>
    <!-- jQuery Form Validation-->
    <script src="<?php echo base_url('application/assets/vendor/jquery-validation/dist/jquery.validate.js'); ?>"></script>
    <script src="<?php echo base_url('application/assets/vendor/jquery-validation/dist/additional-methods.js'); ?>"></script>

    <!-- Datepicker-->
    <script src="<?php echo base_url('application/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
    <!-- Select2-->
    <script src="<?php echo base_url('application/assets/vendor/select2/dist/js/select2.js'); ?>"></script>
    <!-- Clockpicker-->
    <script src="<?php echo base_url('application/assets/vendor/clockpicker/dist/bootstrap-clockpicker.js'); ?>"></script>
    <!-- Range Slider-->
    <script src="<?php echo base_url('application/assets/vendor/nouislider/distribute/nouislider.js'); ?>"></script>
    <!-- ColorPicker-->
    <script src="<?php echo base_url('application/assets/vendor/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js'); ?>"></script>
    <!-- Multiselect-->
    <script src="<?php echo base_url('application/assets/vendor/multiselect/js/jquery.multi-select.js'); ?>"></script>
    <!-- Sweet Alert-->
    <script src="<?php echo base_url('application/assets/vendor/sweetalert/dist/sweetalert-dev.js'); ?>"></script>
    <!-- JQUERY STEPS-->
    <script src="<?php echo base_url('application/assets/vendor/jquery-steps/build/jquery.steps.js'); ?>"></script>

    <!-- Jasny Bootstrap - Input Masks-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/vendor/jasny-bootstrap/js/jasny-bootstrap.min.js"> </script>

    <!-- JQUERY DATE TIME PICKER -->
    <script type="text/javascript" src="<?php echo base_url('application/assets/jquery/jquery.datetimepicker.full.js'); ?>"></script>

    <!-- App script-->
    <script src="<?php echo base_url('application/assets/js/app.js'); ?>"></script>

  </head>

  <body class="theme-default">
    <div class="layout-container">