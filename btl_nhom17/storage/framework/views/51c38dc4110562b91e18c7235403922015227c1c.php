<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div class="slide-home">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo e(route('film', ['uri' => Help::beauty($item->name), 'id' => $item->id])); ?>"
                                       title="<?php echo e($item->name); ?>">
                                        <img src="<?php echo e($item->poster); ?>" alt="" class="thumb">
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- If we need pagination -->
                        <div id="swiper-home" class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="list-film">
                    <h1 class="title" style="text-transform: uppercase">PHIM BỘ MỚI NHẤT</h1>
                    <div class="row">
                        <?php $__currentLoopData = $filmBo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <?php if(sizeof($filmBo) === 0): ?>
                        <table class="admin-table">
                            <tr>
                                <td>
                                    Chưa có phim nào trong thể loại này!
                                </td>
                            </tr>
                        </table>
                    <?php endif; ?>
                    <?php echo e($filmBo->links()); ?>

                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <?php echo $__env->make('slide_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <script>
      var swiper = new Swiper('.slide-home .swiper-container', {
        pagination: {
          el: '.swiper-pagination',
          type: 'progressbar',
        },
        autoplay: {
          delay: 5000,
        },
      });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>