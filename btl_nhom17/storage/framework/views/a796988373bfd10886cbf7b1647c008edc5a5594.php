<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-9 col-sm-8">
            <a href="<?php echo e(route('film.view', ['uri' => Help::beauty($film->name), 'id' => $film->id])); ?>">
                <div class="slide-home">
                    <div class="thumb" style="background-image: url(<?php echo e("/images/" .$film->poster); ?>);"></div>
                    <div class="play"></div>
                </div>
            </a>
            <div class="list-film">
                <h1 class="title" style="color: rgb(255, 94, 0);">
                    <?php echo e($film->name); ?>

                </h1>
                <div class="fb-like" data-href="<?php echo e(url()->current()); ?>" data-layout="standard" data-action="like"
                     data-size="small" data-show-faces="true" data-share="true"></div>
                <div class="film-detail">
                    <a href="<?php echo e(route('film.view', ['uri' => Help::beauty($film->name), 'id' => $film->id])); ?>">
                        <button class="btn btn-inline btn-success">
                            <i class="fa fa-play-circle"></i>
                            XEM PHIM
                        </button>
                    </a>
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(route('film.download', ['uri' => Help::beauty($film->name), 'id' => $film->id])); ?>">
                            <button class="btn btn-inline btn-danger">
                                <i class="fa fa-download"></i>
                                DOWNLOAD
                            </button>
                        </a>
                        <?php if(sizeof(App\Like::where([['user_id', Auth::id()], ['film_id', $film->id]])->get()) === 0): ?>
                            <button id="like-button" data-id="<?php echo e($film->id); ?>" class="btn btn-inline btn-primary">
                                <i class="fa fa-heart"></i>
                                <span>Yêu thích</span>
                            </button>
                        <?php else: ?>
                            <button id="like-button" data-id="<?php echo e($film->id); ?>" class="btn btn-inline btn-primary">
                                <i class="fa fa-heart" style="color: #f00"></i>
                                <span>Đã thích</span>
                            </button>
                        <?php endif; ?>
                    <?php endif; ?>
                    <span>Đánh giá:
                        <span class="star-point"><?php echo e($film->total_vote); ?></span>
                        <i class="fa fa-star" style="color: #ED8A19"></i> (<?php echo e(sizeof($film->vote)); ?> votes)</span>
                    <span>Lượt xem: <?php echo e($film->view); ?></span>
                    <span>Đạo  diễn: <?php echo e($film->director); ?></span>
                    <span>Diễn viên: <?php echo Help::actorTags($film); ?></span>
                    <?php if($film->type === 2): ?>
                        <span>Số tập: <?php echo e(sizeof($film->filmDetail)); ?>/<?php echo e($film->episode); ?></span>
                    <?php endif; ?>
                    <span>Thể  loại: <?php echo Help::listCategory($film->category); ?></span>
                    <span>Tags: <?php echo Help::tags($film); ?></span>
                    <div class="film-about">
                        <?php echo e($film->about); ?>

                    </div>
                </div>
            </div>
            <div class="list-film">
                <h1 class="title">BÌNH LUẬN PHIM</h1>
                <div class="fb-comments" data-href="<?php echo e(url()->current()); ?>" data-numposts="10"></div>
            </div>
            <div class="list-film">
                <h1 class="title">PHIM CÙNG THỂ LOẠI</h1>
                <div class="row">
                    <?php $__currentLoopData = $relate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="list-item" title="<?php echo e($item->name); ?>">
                                <a href="<?php echo e(route('film', ['uri' => Help::beauty($item->name), 'id' => $item->id])); ?>"
                                   title="<?php echo e($item->name); ?>">
                                <div class="star-rank-<?php echo e($item->total_vote); ?>"></div>
                                <?php if($item->type === 2): ?>
                                    <div class="episode"><?php echo e(sizeof($item->filmDetail)); ?>/<?php echo e($item->episode); ?></div>
                                <?php endif; ?>
                                <div class="thumb" style="background-image: url(<?php echo e("/images/" .$item->poster); ?>);"></div>
                                <div class="play"></div>
                                <div class="black-gradient"></div>
                                <div class="film-name">
                                    <a href="<?php echo e(route('film', ['uri' => Help::beauty($item->name), 'id' => $item->id])); ?>"
                                       title="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></a>
                                </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if(count($film->toArray()) === 0): ?>
                    <table class="admin-table">
                        <tr>
                            <td>
                                Chưa có phim nào trong thể loại này!
                            </td>
                        </tr>
                    </table>
                <?php endif; ?>
                <?php echo e($relate->links()); ?>

            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <?php echo $__env->make('slide_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>