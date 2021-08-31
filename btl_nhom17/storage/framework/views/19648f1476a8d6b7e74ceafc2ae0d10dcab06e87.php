 <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 hidden-xs"></div>
            <div class="col-md-6 col-sm-4">
                <div class="list-film">
                    <h1 class="title">SỬA THỂ LOẠI - <?php echo e($category->name); ?></h1>
                    <form class="admin-form" enctype="multipart/form-data" id="edit-category-form">
                        <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
                        <div id="result"></div>
                        <label for="">Tên thể loại</label>
                        <input type="text" name="name" value="<?php echo e($category->name); ?>">
                        <label for="">Loại danh mục: </label>
                        <div class="multiSelect">
                            <span>Chọn một...</span>
                            <ul class="dropSelect" id="dropSelect">
                                <li>
                                    <input type="radio" name="parent_id"
                                           value="0" <?php echo e($category->parent_id === 0 ? 'checked' : ''); ?>> Thể loại cha
                                </li>
                                <li>Danh mục con</li>
                                <?php $__currentLoopData = App\Category::where('parent_id', 0)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <input type="radio" name="parent_id"
                                               value="<?php echo e($item->id); ?>" <?php echo e($category->parent_id === $item->id ? 'checked' : ''); ?>> <?php echo e($item->name); ?>

                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <label for="">Loại phim:</label>
                        <div class="multiSelect">
                            <span>Chọn một...</span>
                            <ul class="dropSelect" id="dropSelect">
                                <li>
                                    <input type="radio" name="type"
                                           value="2" <?php echo e($category->type === 2 ? 'checked' : ''); ?>> Phim nhiều tập
                                </li>
                                <li>
                                    <input type="radio" name="type" id="1" <?php echo e($category->type === 1 ? 'checked' : ''); ?>>
                                    Phim một tập
                                </li>
                            </ul>
                        </div>
                        <button class="button">SỬA THỂ LOẠI</button>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 hidden-xs"></div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>