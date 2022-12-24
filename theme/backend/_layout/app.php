<!DOCTYPE html>
<html lang="en" class="root-text-sm">

<!-- Mirrored from sim.rembangkab.go.id/portal/home/web by HTTrack Website Copier/3.x [XR&CO'2017], Wed, 14 Dec 2022 19:06:23 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>SIM Rembang</title>
    <meta name="description" content="SIM Rembang">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="<?= backendAssets('css/vendors.bundle.css') ?>">
    <link rel="stylesheet" media="screen, print" href="<?= backendAssets('css/app.bundle.css') ?>">
    <link rel="stylesheet" media="screen, print" href="<?= backendAssets('css/datagrid/datatables/datatables.bundle.css') ?>">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= backendAssets('img/logo.png') ?>">
    <link rel="stylesheet" media="screen, print" href="<?= backendAssets('css/markdown.css') ?>">
</head>

<body class="mod-bg-1 nav-function-top">
    <!-- DOC: script to save and load page settings -->
    <?= $this->include('_support/page_settings'); ?>
    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-inner">
            <?= $this->include('_section/aside'); ?>
            <div class="page-content-wrapper">
                <?= $this->include('_section/header') ?>
                <!-- BEGIN Page Content -->
                <main id="js-page-content" role="main" class="page-content">
                    <?= $this->renderSection('main'); ?>
                </main>
                <!-- END Page Content -->
                <?= $this->include('_section/footer'); ?>
            </div>
        </div>
    </div>
    <!-- END Page Wrapper -->
    <?= $this->include('_section/quick_menu'); ?>
    <?= $this->include('_section/setting'); ?>
    <script src="<?= backendAssets('js/vendors.bundle.js') ?>"></script>
    <script src="<?= backendAssets('js/app.bundle.js'); ?>"></script>
    <script src="<?= backendAssets('js/datagrid/datatables/datatables.bundle.js'); ?>"></script>
</body>

<!-- Mirrored from sim.rembangkab.go.id/portal/home/web by HTTrack Website Copier/3.x [XR&CO'2017], Wed, 14 Dec 2022 19:06:48 GMT -->

</html>