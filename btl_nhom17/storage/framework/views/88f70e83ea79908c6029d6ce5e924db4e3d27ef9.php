<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="title">ADMIN CPANEL</h1>
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <?php echo $__env->make('admin.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="list-film">
                    <h1 class="title">DANH SÁCH PHIM</h1>
                    <div style="overflow-x: auto">
                        <table class="admin-table">
                            <tr>
                                <th>ID</th>
                                <th>Tên phim</th>
                                <th>Poster</th>
                                <th>Tình trạng</th>
                                <th>Tuỳ chọn</th>
                            </tr>
                            <?php $__currentLoopData = $film; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td style="text-align: left;">
                                        <a href="<?php echo e(route('film', ['id' => $item->id, 'uri' => Help::beauty($item->name)])); ?>"
                                           title="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></a>
                                    </td>
                                    <td><img src="<?php echo e($item->poster); ?>" alt="" width="50px" height="50px"></td>
                                    <td><?php echo e($item->disable ? 'Bị ẩn' : 'Đang hiển thị'); ?></td>
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if(sizeof($film) === 0): ?>
                                <tr>
                                    <td colspan="4">Chưa có phim nào!</td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                    <?php echo e($film->links()); ?>

                </div>
                <div class="list-film">
                    <h1 class="title">THỐNG KÊ</h1>
                    <div class="film-detail">
                        <span>Tổng số phim: <b><?php echo e(sizeof(App\Film::all())); ?></b></span>
                        <span>Đang hiển thị: <b><?php echo e(sizeof(App\Film::where('disable', 0)->get())); ?></b></span>
                        <span>Đang bị ẩn: <b><?php echo e(sizeof(App\Film::where('disable', 1)->get())); ?></b></span>
                        <span>Tổng số thành viên: <b><?php echo e(sizeof(App\User::all())); ?></b></span>
                        <span>Thành viên VIP: <b><?php echo e(sizeof(App\User::where('vip', 1)->get())); ?></b></span>
                        <span>Thành viên thường: <b><?php echo e(sizeof(App\User::where('vip', 0)->get())); ?></b></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>