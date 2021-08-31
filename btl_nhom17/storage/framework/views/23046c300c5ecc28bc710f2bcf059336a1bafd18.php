 <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <?php echo $__env->make('admin.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="list-film">
                    <h1 class="title">QUẢN LÝ NGƯỜI DÙNG</h1>
                    <div style="overflow-x: auto">
                        <table class="admin-table">
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Ngày đăng ký</th>
                                <th>Thành viên</th>
                                <th>Tuỳ chọn</th>
                            </tr>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Auth::id() === $item->id): ?>
                                    <?php continue; ?>
                                <?php endif; ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><?php echo e(date("H:i d/m/Y", strtotime($item->created_at))); ?></td>
                                    <td><?php echo e($item->vip ? 'VIP' : 'Free'); ?></td>
                                    <td>
                                        <?php if($item->right === 0): ?>
                                            <a id="upgrade-user" data-id="<?php echo e($item->id); ?>">
                                                <button class="btn btn-success">Nâng quyền</button>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($item->right === 1): ?>
                                            <a id="upgrade-user" data-id="<?php echo e($item->id); ?>">
                                                <button class="btn btn-danger">Hạ quyền</button>
                                            </a>
                                        <?php endif; ?>
                                        <a id="block-user" data-id="<?php echo e($item->id); ?>">
                                            <button class="btn btn-danger">
                                                <?php echo e($item->right === -1 ? 'Mở khoá' : 'Khoá'); ?>

                                            </button>
                                        </a>
                                        </a>
                                        <?php if($item->right !== 1): ?>
                                            <a id="delete-user" data-id="<?php echo e($item->id); ?>">
                                                <button class="btn btn-danger">Xoá</button>
                                            </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php if(sizeof($user) === 0): ?>
                                <tr>
                                    <td colspan="5">Chưa có người dùng nào!</td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                    <?php echo e($user->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>