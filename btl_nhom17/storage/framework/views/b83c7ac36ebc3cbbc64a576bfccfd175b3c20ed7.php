<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-9 col-sm-8">
            <?php if(sizeof($film->filmDetail) === 0): ?>
                <div id="player">
                    <script>
                      play('', '');
                    </script>
                </div>
            <?php else: ?>
                <video
                        id="my-video"
                        class="video-js"
                        controls
                        preload="auto"
                        width="850"
                        height="475"
                        poster="<?php echo e("/images/" .$film->poster); ?>"
                        data-setup='{ "controls": true, "autoplay": true, "preload": "auto" }'
                >
                    <source src="<?php echo e('/videos/' .$film->filmDetail->first()->source1); ?>" type="video/mp4"/>
                    <source src="<?php echo e('/videos/' .$film->filmDetail->first()->source1); ?>" type="video/webm"/>
                    <p class="vjs-no-js">
                        Để xem video này, vui lòng bật JavaScript và xem xét nâng cấp lên trình duyệt web
                        <a href="https://videojs.com/html5-video-support/" target="_blank"> supports HTML5 video</a>
                    </p>
                </video>
            <?php endif; ?>
            <div class="film-action">
                <?php if(!Auth::check() || Auth::check() && !Auth::user()->vip): ?>
                    <button class="off-ads">
                        <i class="fa fa-toggle-off"></i>
                        Tắt Quảng Cáo
                    </button>
                <?php endif; ?>
                <button class="report" data-film="<?php echo e($film->id); ?>">
                    <i class="fa fa-flag-checkered"></i>
                    Báo lỗi phim
                </button>
            </div>
            <div class="list-film">
                <h1 class="title" style="color: rgb(255, 94, 0);">
                    <?php echo e($film->name); ?>

                </h1>
                <?php if(Auth::check()): ?>
                    <?php if(sizeof(Auth::user()->vote()->where('film_id', $film->id)->get()) === 0): ?>
                        <div class="film-vote">
                            <span>ĐÁNH GIÁ PHIM</span>
                            <span>
                                <span class="star-point">0</span>
                            </span>
                            <div class="list-star" data-id="<?php echo e($film->id); ?>">
                                <span class="star-white"></span>
                                <span class="star-white"></span>
                                <span class="star-white"></span>
                                <span class="star-white"></span>
                                <span class="star-white"></span>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="film-vote">
                            <span>BẠN ĐÃ ĐÁNH GIÁ</span>
                            <span>
                                <span class="star-point"><?php echo e(Auth::user()->vote()->where('film_id', $film->id)->first()->point); ?></span>
                            </span>
                            <div class="list-star">
                                <?php for($i = 0; $i < Auth::user()->vote()->where('film_id', $film->id)->first()->point; $i++): ?>
                                    <span class="star"></span>
                                <?php endfor; ?>
                                <?php for($i = 0; $i < (5 - Auth::user()->vote()->where('film_id', $film->id)->first()->point); $i++): ?>
                                    <span class="star-white2"></span>
                                <?php endfor; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <div class="fb-like" data-href="<?php echo e(url()->current()); ?>" data-layout="standard" data-action="like"
                     data-size="small" data-show-faces="true" data-share="true"></div>
                <?php if($film->type === 2): ?>
                    <div class="film-eposide">
                        <?php $__currentLoopData = $film->filmDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span <?php echo e($loop->index ? '' : 'class=active'); ?> data-eposide="<?php echo e($item->id); ?>"><?php echo e(++$loop->index); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
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
                <?php if(sizeof($film->toArray()) === 0): ?>
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
    <script>
      jwplayer().on('setupError', function () {
        $('<div/>').addClass('over').appendTo('body');
        $('body').append('<div class="login-dialog"><span class="closex"></span><div class="alert alert-danger center" style="font-size: 16px;">Có lỗi xảy ra, có thể do mạng yếu hoặc tập phim này không tồn tại. Hãy thử F5 lại trang web!</div></div>');
      });
      jwplayer().on('error', function () {
        $('<div/>').addClass('over').appendTo('body');
        $('body').append('<div class="login-dialog"><span class="closex"></span><div class="alert alert-danger center" style="font-size: 16px;">Có lỗi xảy ra, có thể do mạng yếu hoặc không thể phát tập phim này. Hãy thử F5 lại trang web!</div></div>');
      });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>