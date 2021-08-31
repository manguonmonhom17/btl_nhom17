 <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <?php echo $__env->make('admin.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="list-film">
                    <h1 class="title">QUẢN LÝ PHIM</h1>
                    <div style="overflow-x: auto">
                        <table class="admin-table">
                            <tr>
                                <th>ID</th>
                                <th>Tên phim</th>
                                <th>Poster</th>
                                <th>Tuỳ chọn</th>
                            </tr>
                            <?php $__currentLoopData = $film; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td style="text-align: left;">
                                        <a href="<?php echo e(route('film', ['id' => $item->id, 'uri' => Help::beauty($item->name)])); ?>"
                                           title="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></a>
                                    </td>
                                    <td>
                                        <img src="<?php echo e($item->poster); ?>" alt="" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('admin.film.source', ['id' => $item->id])); ?>">
                                            <button class="btn btn-primary">Quản lý Source</button>
                                        </a>
                                        <a href="<?php echo e(route('admin.film', ['action' => 'edit', 'id' => $item->id])); ?>">
                                            <button class="btn btn-success">Sửa</button>
                                        </a>
                                        <a id="delete-film" data-id="<?php echo e($item->id); ?>">
                                            <button class="btn btn-danger">Xoá</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php if(sizeof($film) === 0): ?>
                                <tr>
                                    <td colspan="4">Chưa có phim nào!</td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                    <?php echo e($film->links()); ?>

                    <a href="<?php echo e(route('admin.film', ['action' => 'add'])); ?>">
                        <button class="btn btn-success">Thêm phim mới</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>