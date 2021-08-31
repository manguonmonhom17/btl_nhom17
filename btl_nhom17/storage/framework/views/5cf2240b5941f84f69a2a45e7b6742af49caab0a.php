<?php $__env->startSection('content'); ?>
    <div class="login-dialog">
        <div id="result"></div>
        <form id="login-form">
            <input type="hidden" name="redirectUrl" value="<?php echo e(request()->redirectUrl); ?>">
            <div class="input">
                <input type="email" name="email" placeholder="Email"/>
            </div>
            <div class="input">
                <input type="password" name="password" placeholder="Mật khẩu"/>
            </div>
            <button class="button">Đăng nhập</button>
        </form>
        <a href="<?php echo e(route('register')); ?>">
            <button class="button">Đăng ký tài khoản</button>
        </a>
        <span class="login-choose">hoặc</span>
        <a href="<?php echo e(route('login.facebook')); ?>">
            <button class="button btn-facebook"><i class="fa fa-facebook"></i> Đăng nhập bằng Facebook</button>
        </a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>