 <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <?php echo $__env->make('admin.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="list-film">
                    <h1 class="title">QUẢN LÝ RESOURCE - <?php echo e($film->name); ?></h1>
                    <div style="overflow-x: auto;">
                        <table class="admin-table">
                            <tr>
                                <th>#</th>
                                <th>Tên tập phim</th>
                                <th>480p</th>
                                <th>720p</th>
                                <th>1080p</th>
                                <th>480p VIP</th>
                                <th>720p VIP</th>
                                <th>1080p VIP</th>
                                <th>Tuỳ chọn</th>
                            </tr>
                            <?php $__currentLoopData = $filmDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->source1); ?></td>
                                    <td><?php echo e($item->source2); ?></td>
                                    <td><?php echo e($item->source3); ?></td>
                                    <td><?php echo e($item->source_vip1); ?></td>
                                    <td><?php echo e($item->source_vip2); ?></td>
                                    <td><?php echo e($item->source_vip3); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.film.source', ['action' => 'edit', 'id' => $film->id, 'filmDetail' => $item->id])); ?>">
                                            <button class="btn btn-success">Sửa</button>
                                        </a>
                                        <a id="delete-source" data-film-detail="<?php echo e($film->id); ?>" data-id="<?php echo e($item->id); ?>">
                                            <button class="btn btn-danger">Xoá</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php if(sizeof($film->filmDetail) === 0): ?>
                                <tr>
                                    <td colspan="9">Chưa có resource cho phim này!</td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                    <?php echo e($filmDetail->links()); ?> <?php if(sizeof($filmDetail)
                < $film->episode): ?>
                        <a href="<?php echo e(route('admin.film.source', ['action' => 'add', 'id' => $film->id])); ?>">
                            <button class="btn btn-success">Thêm resource phim</button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>