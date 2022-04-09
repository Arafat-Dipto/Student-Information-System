<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Information System</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo e(asset('/css/metisMenu.min.css')); ?>" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo e(asset('/css/timeline.css')); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('/css/startmin.css')); ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo e(asset('/css/morris.css')); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    


    <div id="page-wrapper">
        <div class="container">

            <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- /.row -->

        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->







<!-- jQuery -->
<script src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo e(asset('/js/metisMenu.min.js')); ?>"></script>

<!-- Morris Charts JavaScript -->




<!-- Custom Theme JavaScript -->
<script src="<?php echo e(asset('/backend/js/startmin.js')); ?>"></script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
<?php /**PATH /home/dipto/Desktop/projects/student_info_system/resources/views/layout/homeMaster.blade.php ENDPATH**/ ?>