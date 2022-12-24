<!DOCTYPE html>
<html lang="en" class="root-text-sm">

<!-- Mirrored from sim.rembangkab.go.id/portal/home/web by HTTrack Website Copier/3.x [XR&CO'2017], Wed, 14 Dec 2022 19:06:23 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title><?php echo e($title ?? null); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="<?php echo e(backendAssets('css/vendors.bundle.css')); ?>">
    <link rel="stylesheet" media="screen, print" href="<?php echo e(backendAssets('css/app.bundle.css')); ?>">
    <link rel="stylesheet" media="screen, print" href="<?php echo e(backendAssets('css/datagrid/datatables/datatables.bundle.css')); ?>">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(backendAssets('img/logo.png')); ?>">
    <link rel="stylesheet" media="screen, print" href="<?php echo e(backendAssets('css/markdown.css')); ?>">
</head>

<body class="mod-bg-1 nav-function-top">
    
    <?php echo $__env->make('_support/page_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    
    <div class="page-wrapper">
        <div class="page-inner">
            <?php echo $__env->make('_section/aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="page-content-wrapper">
                
                <?php echo $__env->make('_section/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                
                <main id="js-page-content" role="main" class="page-content">
                    <?php echo $__env->yieldContent('main'); ?>
                </main>
                
                
                <?php echo $__env->make('_section/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
            </div>
        </div>
    </div>
    
    <?php echo $__env->make('_section/quick_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('_section/setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(backendAssets('js/vendors.bundle.js')); ?>"></script>
    <script src="<?php echo e(backendAssets('js/app.bundle.js')); ?>"></script>
    <script src="<?php echo e(backendAssets('js/datagrid/datatables/datatables.bundle.js')); ?>"></script>
</body>
</html><?php /**PATH E:\htdocs\project\brycms\brycms\theme\backend/_layout/app.blade.php ENDPATH**/ ?>