 <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <?php echo $__env->make('admin.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="list-film">
                    <h1 class="title">QUẢN LÝ THỂ LOẠI</h1>
                    <div style="overflow-x: auto;">
                        <table class="admin-table">
                            <tr>
                                <th>ID</th>
                                <th>Tên thể loại</th>
                                <th>Loại phim</th>
                                <th>Tuỳ chọn</th>
                            </tr>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="parent">
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->type === 2 ? 'Nhiều tập' : 'Một tập'); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.category', ['action' => 'edit', 'id' => $item->id])); ?>">
                                            <button class="btn btn-success">Sửa</button>
                                        </a>
                                        <a id="delete-category" data-id="<?php echo e($item->id); ?>">
                                            <button class="btn btn-danger">Xoá</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php $__currentLoopData = $item->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo e($item->parent->name); ?> - <?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->type === 1 ? 'Nhiều tập' : 'Một tập'); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.category', ['action' => 'edit', 'id' => $item->id])); ?>">
                                                <button class="btn btn-success">Sửa</button>
                                            </a>
                                            <a id="delete-category" data-id="<?php echo e($item->id); ?>">
                                                <button class="btn btn-danger">Xoá</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php if(sizeof($category) === 0): ?>
                                <tr>
                                    <td colspan="4">Chưa có thể loại nào!</td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                    <?php echo e($category->links()); ?>

                    <a href="<?php echo e(route('admin.category', ['action' => 'add'])); ?>">
                        <button class="btn btn-success">Thêm thể loại mới</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>