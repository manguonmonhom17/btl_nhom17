<div class="ads hidden-xs">
    <img src="<?php echo e(asset('css/icons/qc1.jpg')); ?>" alt="">
</div>
<div class="ads hidden-xs">
    <img src="<?php echo e(asset('css/icons/qc2.png')); ?>" alt="">
</div>
<div class="list-film">
    <h1 class="title">TOP PHIM - PHIMHD+</h1>
    <?php $__currentLoopData = $topRate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="list-item-bar">
            <div class="thumb" style="background-image: url(<?php echo e("/images/" .$item->poster); ?>)"></div>
            <div class="info-film">
                <span class="film-name">
                    <a href="<?php echo e(route('film', ['uri' => Help::beauty($item->name), 'id' => $item->id])); ?>"
                       title="<?php echo e($item->name); ?>">
                        <?php echo e($item->name); ?>

                    </a>
                </span>
                <span class="star-rank-<?php echo e($item->total_vote); ?>"></span>
                <span>Lượt xem: <?php echo e($item->view); ?></span>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>