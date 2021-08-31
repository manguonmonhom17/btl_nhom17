<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="title">TÌM KIẾM NÂNG CAO</h1>
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="list-film">
                    <div class="admin-form">
                        <form>
                            <input type="text" name="keys" placeholder="Nhập tên phim, diễn viên, đạo diễn...">
                            <button class="button">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="list-film">
                    <?php if($film): ?>
                        <h1 class="title">KẾT QUẢ TÌM KIẾM</h1>
                        <table class="admin-table">
                            <tr>
                                <td>Tìm thấy <?php echo e(sizeof($film)); ?> kết quả với từ khoá "<b><?php echo e($keys); ?></b>"</td>
                            </tr>
                        </table>
                        <div class="row">
                            <?php $__currentLoopData = $film; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="list-item" title="<?php echo e($item->name); ?>">
                                        <div class="star-rank-<?php echo e($item->total_vote); ?>"></div>
                                        <?php if($item->type === 2): ?>
                                            <div class="episode"><?php echo e(sizeof($item->filmDetail)); ?>/<?php echo e($item->episode); ?></div>
                                        <?php endif; ?>
                                        <div class="thumb" style="background-image: url(<?php echo e($item->poster); ?>);"></div>
                                        <div class="play"></div>
                                        <div class="black-gradient"></div>
                                        <div class="film-name">
                                            <a href="<?php echo e(route('film', ['uri' => Help::beauty($item->name), 'id' => $item->id])); ?>"
                                               title="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php echo e($film->links()); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>