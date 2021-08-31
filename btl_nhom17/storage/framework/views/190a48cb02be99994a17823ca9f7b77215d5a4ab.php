<div class="slide">
    <div class="slide-user">
        <span class="icon-user"
              style="<?php echo e(Auth::check() ? 'background-image: url('.Auth::user()->avatar.');' : ''); ?>"></span>
        <div class="visible-xs">
            <?php if(Auth::check()): ?>
                <span style="color:red">Credit: <?php echo e(number_format(Auth::user()->credit)); ?></span><br>
                <?php if(Auth::user()->right === 1): ?>
                    <span><a style="color:red; font-weight:bold;"
                             href="<?php echo e(route('admin')); ?>">Admin Control Panel</a></span>
                <?php else: ?>
                    <span><a href="<?php echo e(route('user')); ?>">Quản lý tài khoản</a></span>
                <?php endif; ?>
                | <span><a href="<?php echo e(route('logout')); ?>">Đăng xuất</a></span>
            <?php else: ?>
                <a href="<?php echo e(route('login', ['redirectUrl' => url()->current()])); ?>">
                    <button class="button">Đăng nhập</button>
                </a>
            <?php endif; ?>
        </div>
        <span class="slide-collapse hidden-xs">
        <?php if(Auth::check()): ?>
                <?php if(Auth::user()->right === 1): ?>
                    <span><a style="color:red; font-weight:bold;"
                             href="<?php echo e(route('admin')); ?>">Admin Control Panel</a></span>
                <?php endif; ?>
                <span><a href="<?php echo e(route('user')); ?>">Quản lý tài khoản</a></span>
                <span style="color:red">Credit: <?php echo e(number_format(Auth::user()->credit)); ?></span>
                <span><a href="<?php echo e(route('user.recharge')); ?>">Nạp Credit</a></span>
                <?php if(!Auth::user()->vip): ?>
                    <span><a href="<?php echo e(route('user.upgrade')); ?>">Nâng cấp VIP</a></span>
                <?php endif; ?>
                <span><a href="">Yêu cầu post phim</a></span>
                <a href="<?php echo e(route('logout')); ?>">
                <button class="button">Đăng xuất</button>
            </a>
            <?php else: ?>
                <a href="<?php echo e(route('login', ['redirectUrl' => url()->current()])); ?>">
                <button class="button">Đăng nhập</button>
            </a>
            <?php endif; ?>
    </span>
    </div>
    <ul class="slide-list">
        <?php echo Help::slideCategories(); ?>

    </ul>
</div>