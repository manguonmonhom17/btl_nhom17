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
                                        <img src="<?php echo e("/images/" .$item->poster); ?>" alt="" class="thumb">
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- If we need pagination -->
                        <div id="swiper-home" class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="list-film">
                    <h1 class="title">
                        PHIM BỘ MỚI NHẤT
                        <span>
                        <a href="<?php echo e(route('phimbo')); ?>"></a>
                    </span>
                    </h1>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $filmBo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide col-md-3 col-sm-3 col-xs-6">
                                    <div class="list-item" title="<?php echo e($item->name); ?>">
                                        <a href="<?php echo e(route('film', ['uri' => Help::beauty($item->name), 'id' => $item->id])); ?>"
                                           title="<?php echo e($item->name); ?>">
                                            <div class="star-rank-<?php echo e($item->total_vote); ?>"></div>
                                            <?php if($item->type === 2): ?>
                                                <div class="episode"><?php echo e(sizeof($item->filmDetail)); ?>

                                                    /<?php echo e($item->episode); ?></div>
                                            <?php endif; ?>
                                            <div class="thumb" style="background-image: url(<?php echo e("/images/" .$item->poster); ?>);"></div>
                                            <div class="play"></div>
                                            <div class="black-gradient"></div>
                                            <div class="film-name">
                                                <?php echo e($item->name); ?>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="list-film">
                    <h1 class="title">
                        PHIM LẺ MỚI
                        <span>
                        <a href="<?php echo e(route('phimle')); ?>"></a>
                    </span>
                    </h1>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $filmLe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide col-md-3 col-sm-3 col-xs-6">
                                    <div class="list-item" title="<?php echo e($item->name); ?>">
                                        <a href="<?php echo e(route('film', ['uri' => Help::beauty($item->name), 'id' => $item->id])); ?>"
                                           title="<?php echo e($item->name); ?>">
                                            <div class="star-rank-<?php echo e($item->total_vote); ?>"></div>
                                            <?php if($item->type === 2): ?>
                                                <div class="episode"><?php echo e(sizeof($item->filmDetail)); ?>

                                                    /<?php echo e($item->episode); ?></div>
                                            <?php endif; ?>
                                            <div class="thumb" style="background-image: url(<?php echo e("/images/" .$item->poster); ?>);"></div>
                                            <div class="play"></div>
                                            <div class="black-gradient"></div>
                                            <div class="film-name">
                                                <?php echo e($item->name); ?>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="list-film">
                    <h1 class="title">
                        TOP PHIM MỚI
                        <span>
                        <a href="<?php echo e(route('phimmoi')); ?>"></a>
                    </span>
                    </h1>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $filmNew; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide col-md-3 col-sm-3 col-xs-6">
                                    <div class="list-item" title="<?php echo e($item->name); ?>">
                                        <a href="<?php echo e(route('film', ['uri' => Help::beauty($item->name), 'id' => $item->id])); ?>"
                                           title="<?php echo e($item->name); ?>">
                                            <div class="star-rank-<?php echo e($item->total_vote); ?>"></div>
                                            <?php if($item->type === 2): ?>
                                                <div class="episode"><?php echo e(sizeof($item->filmDetail)); ?>

                                                    /<?php echo e($item->episode); ?></div>
                                            <?php endif; ?>
                                            <div class="thumb" style="background-image: url(<?php echo e("/images/" .$item->poster); ?>);"></div>
                                            <div class="play"></div>
                                            <div class="black-gradient"></div>
                                            <div class="film-name">
                                                <?php echo e($item->name); ?>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="list-film">
                    <h1 class="title">TOP PHIM XEM NHIỀU</h1>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $filmMostView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide col-md-3 col-sm-3 col-xs-6">
                                    <div class="list-item" title="<?php echo e($item->name); ?>">
                                        <a href="<?php echo e(route('film', ['uri' => Help::beauty($item->name), 'id' => $item->id])); ?>"
                                           title="<?php echo e($item->name); ?>">
                                            <div class="star-rank-<?php echo e($item->total_vote); ?>"></div>
                                            <?php if($item->type === 2): ?>
                                                <div class="episode"><?php echo e(sizeof($item->filmDetail)); ?>

                                                    /<?php echo e($item->episode); ?></div>
                                            <?php endif; ?>
                                            <div class="thumb" style="background-image: url(<?php echo e("/images/" .$item->poster); ?>);"></div>
                                            <div class="play"></div>
                                            <div class="black-gradient"></div>
                                            <div class="film-name">
                                                <?php echo e($item->name); ?>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <?php echo $__env->make('slide_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
          var width = window.innerWidth;
          var newFilm = new Swiper('.list-film .swiper-container', {
            slidesPerView: 4,
            slidesPerColumn: 2,
            breakpoints: {
              480: {
                slidesPerView: 2
              },
              1024: {
                slidesPerView: 3
              }
            }
          });
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>