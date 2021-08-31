<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <a href="<?php echo e(route('film.view', ['uri' => Help::beauty($film->name), 'id' => $film->id])); ?>">
                    <div class="slide-home">
                        <div class="thumb" style="background-image: url(<?php echo e($film->poster); ?>);"></div>
                        <div class="play"></div>
                    </div>
                </a>
                <div class="list-film">
                    <h1 class="title" style="color: rgb(255, 94, 0);">
                        Download: <?php echo e($film->name); ?>

                    </h1>
                    <div class="fb-like" data-href="<?php echo e(url()->current()); ?>" data-layout="standard" data-action="like"
                         data-size="small" data-show-faces="true" data-share="true"></div>
                    <div class="film-action">
                        <button class="report" data-film="<?php echo e($film->id); ?>">
                            <i class="fa fa-flag-checkered"></i>
                            Báo lỗi
                        </button>
                    </div>
                    <?php if(sizeof($film->filmDetail) === 0): ?>
                        <div class="alert alert-danger">
                            Không tìm thấy file download của phim này
                        </div>
                    <?php else: ?>
                        <?php if($film->type === 2): ?>
                            <div id="download-div" style="display: none">
                                <span>Chọn chất lượng: </span>
                                <a href="" id="download-m18">
                                    <button class="btn btn-danger">480p</button>
                                </a>
                                <a href="" id="download-m22">
                                    <button class="btn btn-danger">720p</button>
                                </a>
                                <a href="" id="download-m36">
                                    <button class="btn btn-danger">1080p</button>
                                </a>
                            </div>
                            <span>Danh sách tập: </span>
                            <?php if($film->type === 2): ?>
                                <div class="film-eposide-download">
                                    <?php $__currentLoopData = $film->filmDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span data-eposide="<?php echo e($item->id); ?>"><?php echo e(++$loop->index); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <div id="download-div">
                                Chọn chất lượng:
                                <a href="<?php echo e(route('film.download.start', ['uri' => base64_encode($film->filmDetail->first()->name.'.'.$film->filmDetail->first()->id.'.m18')])); ?>"
                                   id="download-m18">
                                    <button class="btn btn-danger">480p</button>
                                </a>
                                <a href="<?php echo e(route('film.download.start', ['uri' => base64_encode($film->filmDetail->first()->name.'.'.$film->filmDetail->first()->id.'.m18')])); ?>"
                                   id="download-m18">
                                    <button class="btn btn-danger">720p</button>
                                </a>
                                <a href="<?php echo e(route('film.download.start', ['uri' => base64_encode($film->filmDetail->first()->name.'.'.$film->filmDetail->first()->id.'.m18')])); ?>"
                                   id="download-m18">
                                    <button class="btn btn-danger">1080p</button>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <?php echo $__env->make('slide_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>