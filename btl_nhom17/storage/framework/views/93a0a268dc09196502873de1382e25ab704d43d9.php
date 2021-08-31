<div class="login-dialog">
    <span class="closex"></span>
    <div id="result"></div>
    <form id="report-form">
        <input type="hidden" name="film" value="<?php echo e($film->id); ?>">
        <label for="">Email của bạn:</label>
        <input type="email" name="email"
               <?php if(Auth::check()): ?>
               value="<?php echo e(Auth::user()->email); ?>"
                <?php endif; ?>
        >
        <label for="">Phim: <b><?php echo e($film->name); ?></b></label>
        <label for="">Nội dung:</label>
        <textarea name="message"></textarea>
        <button class="button">Gửi báo lỗi</button>
    </form>
</div>