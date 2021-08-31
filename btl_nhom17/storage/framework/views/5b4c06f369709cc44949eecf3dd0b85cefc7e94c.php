<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="list-film">
            <h1 class="title">SỬA RESOURCE - <?php echo e($filmDetail->name); ?></h1>
            <form class="admin-form" enctype="multipart/form-data" id="edit-source-form"
                  data-film-id="<?php echo e($filmDetail->film->id); ?>" data-id="<?php echo e($filmDetail->id); ?>">
                <div id="result"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <label for="">Tên source (tên tập phim):</label>
                        <input type="text" name="name" value="<?php echo e($filmDetail->name); ?>">
                        <label for="">Source 480p</label>
                        <textarea name="m18"><?php echo e($filmDetail->source1); ?></textarea>
                        <label for="">Source 720p</label>
                        <textarea name="m22"><?php echo e($filmDetail->source2); ?></textarea>
                        <label for="">Source 1080p</label>
                        <textarea name="m36"><?php echo e($filmDetail->source3); ?></textarea>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label for="">Source 480p VIP</label>
                        <textarea name="m18_vip"><?php echo e($filmDetail->source_vip1); ?></textarea>
                        <label for="">Source 720p VIP</label>
                        <textarea name="m22_vip"><?php echo e($filmDetail->source_vip2); ?></textarea>
                        <label for="">Source 1080p VIP</label>
                        <textarea name="m36_vip"><?php echo e($filmDetail->source_vip3); ?></textarea>
                        <button class="button">Lưu Source</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>