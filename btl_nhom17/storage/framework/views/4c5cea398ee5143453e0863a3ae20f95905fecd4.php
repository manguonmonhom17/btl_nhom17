<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo e($title ?? $setting->title); ?>"/>
    <meta property="og:description" content="<?php echo e($description ?? $setting->descriptions); ?>"/>
    <meta property="og:image" content="<?php echo e($imagePoster ?? asset('css/icons/logo.jpg')); ?>"/>
    <meta name="description" content="<?php echo e($description ?? $setting->descriptions); ?>">
    <meta name="keywords" content="<?php echo e($keyword ?? $setting->keywords); ?>">
    <base href="<?php echo e(url('')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/swiper.min.css')); ?>">
    <script src="https://content.jwplatform.com/libraries/90pS7TYy.js"></script>
    <link href="<?php echo e(asset('css/video-js.css')); ?>" rel="stylesheet"/>
    <script src="<?php echo e(asset('js/videojs-ie8.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.min.js')); ?>"></script>
    <title><?php echo e($title ?? $setting->title); ?></title>
</head>
<body id="root">
<div id="fb-root"></div>
<script src="<?php echo e(asset('js/video.js')); ?>"></script>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=1830570347236325&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<header>
    <div class="header-logo">
        <a href="<?php echo e(route('home')); ?>" title="Home">
            <img src="<?php echo e(asset('css/icons/logo.jpg')); ?>" alt="LOGO"/>
        </a>
    </div>
    <div class="search-box">
        <button class="search-box_button">
            <i class="fa fa-search"></i>
        </button>
        <input type="text" placeholder="Tìm kiếm phim, diễn viên, đạo diễn..." class="search-box_input"/>
        <button class="search-box_button_open"><i class="fa fa-search"></i></button>
    </div>
    <button class="btn-toggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</header>
<div id="content">
    <?php echo $__env->make('slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
</div>
<footer>
    <ul>
        <li>
            <img src="<?php echo e(asset('css/icons/logo.jpg')); ?>" alt="LOGO"/>
        </li>
        <li class="footer-inline">
            <a href="<?php echo e(url('hoi-dap-huong-dan')); ?>">Hỏi đáp - Hướng dẫn</a>
        </li>
        <li class="footer-inline">
            <a href="<?php echo e(url('dieu-khoan-su-dung')); ?>">Điều khoản sử dụng</a></li>
        <li class="footer-inline">
            <a href="#">Liên hệ quảng cáo</a></li>
        <li>
            Copyright ©<?php echo e(date('Y')); ?> PHIMHD+. All Rights Reserved.
        </li>
    </ul>
</footer>
</body>
</html>