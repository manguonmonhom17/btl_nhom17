<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="list-film">
            <h1 class="title">SỬA PHIM - <?php echo e($film->name); ?></h1>
            <form class="admin-form" enctype="multipart/form-data" id="edit-film-form">
                <input type="hidden" name="id" value="<?php echo e($film->id); ?>">
                <div id="result"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <label for="">Tên phim:</label>
                        <input type="text" name="name" value="<?php echo e($film->name); ?>">
                        <label for="">Diễn viên: (ngăn cách bởi dấu ",")</label>
                        <textarea name="actor"><?php echo e($film->actor); ?></textarea>
                        <label for="">Đạo diễn: (ngăn cách bởi dấu ",")</label>
                        <textarea name="director"><?php echo e($film->director); ?></textarea>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label for="">Mô tả ngắn:</label>
                        <textarea name="about"><?php echo e($film->about); ?></textarea>
                        <label for="">Danh mục: <?php echo e(count($parent->toArray()) === 0 ? '(Phim này chưa có danh mục)':''); ?></label>
                        <div class="multiSelect">
                            <span>Chọn danh mục...</span>
                            <ul class="dropSelect" id="category_parent">
                                <?php $__currentLoopData = $categoryParent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <input type="radio" name="category_parent"
                                               value="<?php echo e($item->id); ?>" <?php echo e(count($parent->toArray()) > 0 && $item->id == $parent->id ? "checked" : ""); ?>> <?php echo e($item->name); ?>

                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <label for="">Thể loại: (chọn nhiều)</label>
                        <div class="multiSelect">
                            <span>Chọn nhiều...</span>
                            <ul class="dropSelect" id="dropSelect">
                                <?php if(count($parent->toArray()) > 0): ?>
                                    <?php $__currentLoopData = $parent->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <input type="checkbox" name="category[]"
                                                   value="<?php echo e($item->id); ?>" <?php echo e(in_array($item->id, $categories) ? "checked" : ""); ?>> <?php echo e($item->name); ?>

                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label for="">Từ khoá: (ngăn cách bởi dấu ",")</label>
                        <textarea name="tags"><?php echo e($film->tags); ?></textarea>
                        <label for="">Số tập:</label>
                        <input type="text" name="episode" value="<?php echo e($film->episode); ?>">
                        <label for="">Poster:</label>
                        <input type="file" name="poster">
                        <label for="">Poster cũ:</label>
                        <div class="old-poster">
                            <img src="<?php echo e($film->poster); ?>" alt="">
                        </div>
                        <br>
                        <input type="checkbox" name="is_slide" <?php echo e($film->is_slide ? "checked" : ""); ?>> Đặt làm Slide <br>
                        <input type="checkbox" name="disable" <?php echo e($film->disable ? "checked" : ""); ?>> Ẩn phim
                        <button class="button">Sửa Phim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>