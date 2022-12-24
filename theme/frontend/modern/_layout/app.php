<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?= frontendAsset('css/bs.min.css') ?>">
    <link rel="stylesheet" href="<?= frontendAsset('css/bs_icon.css'); ?>">
    <link rel="stylesheet" href="<?= frontendAsset('css/custom.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? null; ?></title>
</head>

<body>
    <?= $this->include('_section/navbar'); ?>
    <div class="bg-head">
        <div class="content-head-2 text-light">
            <div class="container py-5 d-flex">
                <div class="desc">
                    <img class="thumbnails-ilsyaa-mobile d-block d-xl-none d-lg-none" src="https://velixs.com/storage/blogs/al8iq8Rn32k7cD111s0hcYT5GLuXI9fotsARACi2.png" alt="Cara Menampilkan Tanggal dan Waktu Sekarang di PHP">
                    <h1 class="display-5 fw-bold title-item-detail">Cara Menampilkan Tanggal dan Waktu Sekarang di PHP
                    </h1>
                    <p class="text-muted h6 fw-bold text-slow d-none d-xl-block d-lg-block">Bahasa Pemrograman PHP di
                        lengkapi dengan berbagai fungsi dan fitur yang sangat memudahkan dan juga membantu para
                        programmer
                        dalam membuat dan bahkan menyelesaikan sebuah program yang sedang mereka ke...</p>
                    <div class="line-detail my-3"></div>
                    <div class="text-slow">
                        <div class="mb-1"><i class="fa fa-calendar"></i> Published on 22 Dec 2022</div>
                        <div class="mb-1"><i class="fa fa-pen"></i> Written by <a style="text-decoration: none; color: #fff" href="https://velixs.com/p/ilsya">Ilham
                                Cahya</a></div>
                        <div class="mb-1"><i class="fa fa-bookmark"></i>
                            <a href="https://velixs.com/topics/php" class="badge rounded-pill text-bg-darks" style="background: rgb(118 106 255);">PHP</a>
                        </div>
                        <div class="mb-1"><i class="fa fa-tags"></i>
                            <a href="https://velixs.com/tutorial?tags=basic" class="badge rounded-pill text-bg-darks">Basic</a>
                        </div>
                    </div>
                </div>
                <img class="thumbnails-ilsyaa d-none d-xl-block d-lg-block" src="https://velixs.com/storage/blogs/al8iq8Rn32k7cD111s0hcYT5GLuXI9fotsARACi2.png" alt="Cara Menampilkan Tanggal dan Waktu Sekarang di PHP">
            </div>
        </div>
    </div>
    <?php $this->renderSection('main'); ?>
    <script>
        document.querySelector('.toggle').onclick = () => {
            document.querySelector('.dropdown-navbar').classList.toggle('show')
        }
    </script>
</body>

</html>