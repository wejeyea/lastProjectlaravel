<?php $__env->startSection('content'); ?>
    
    OK
    <div class="container pb-5">
        <div class="row" style="justify-content:space-evenly">
            <form class="d-flex ">
                <input name="search" class="form-control me-2" type="search" placeholder="Search for Books" aria-label="search">
                <button class="btn btn-secondary" type="submit">Search</button>
            </form>
        </div>

        <div >
            <?php $__currentLoopData = $beautys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beauty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card" style="width: 18rem;margin-top:30px">
                        <img class="card-img-top" src="<?php echo e(asset('/storage/Image/'.$beauty->image)); ?>" alt="Book Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($beauty->name); ?></h5>
                            <p class="card-text"><?php echo e($beauty->detail); ?></p>
                            <p class="card-text"><?php echo e($beauty->price); ?></p>
                        </div>
                    </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hanny/webprog-project/resources/views/home.blade.php ENDPATH**/ ?>