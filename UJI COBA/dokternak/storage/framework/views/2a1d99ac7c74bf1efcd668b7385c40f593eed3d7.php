
  
<?php $__env->startSection('content'); ?>
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row align-items-center mb-2">
          <div class="col">
            <h2 class="h5 page-title">Welcome!</h2>
          </div>
          <div class="col-auto">
            <form class="form-inline">
              <div class="form-group d-none d-lg-inline">
                <label for="reportrange" class="sr-only">Date Ranges</label>
                <div id="reportrange" class="px-2 py-2 text-muted">
                  <span class="small"></span>
                </div>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <header class="panel-heading">
            <?php echo e(isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan'); ?> Data Tutorial
        </header>
          <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
          <?php endif; ?>
          <h2 class="page-title">Form validation</h2>
          <p class="text-muted">Provide valuable, actionable feedback to your users with HTML5 form validation</p>
              <div class="card shadow">
                <div class="card-header">
                  <strong class="card-title">Advanced Validation</strong>
                </div>
                <div class="card-body"> 
                  <form class="needs-validation" id="tutorial_form" method="POST" enctype="multipart/form-data"
                            action="<?php echo e(isset($tutorial) ? route('data_tutorial.update',$tutorial->id_tutorial) : 
                            route('data_tutorial.store')); ?>">
                                <?php echo csrf_field(); ?>

                                <?php echo isset($tutorial) ? method_field('PUT') : ''; ?>

                      <input type="hidden" name="id_tutorial" value="<?php echo e(isset($tutorial) ? $tutorial->id_tutorial : ''); ?>"> <br/>
                      
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="validationCustom3">Judul</label>
                          <input class="form-control" id="judul_tutorial" name="judul_tutorial" minlength="5" type="text" placeholder="Masukkan judul tutorial"
                          value="<?php echo e(isset($tutorial) ? $tutorial->judul_tutorial : ''); ?>"  
                              required>
                          <div class="valid-feedback"> Looks good! </div>
                        </div>
                      </div> <!-- /.form-row -->
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Isi</label>
                        <input class="form-control" id="isi" name="isi" minlength="5" type="text" placeholder="tulis isi tutorial"
                        value="<?php echo e(isset($tutorial) ? $tutorial->isi : ''); ?>"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Icon</label>
                        <input type="file" name="icon" id="icon" class="form-control <?php echo e($errors->has('icon') ? 'is-invalid' : ''); ?>">
                            <?php if( $errors->has('icon')): ?>
                            <span class="text-danger small">
                                <p><?php echo e($errors->first('icon')); ?></p>
                            </span>
                        <?php endif; ?>
                    </div>
                  </div>
                   
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="<?php echo e(route('data_tutorial.index')); ?>"><button class="btn btn-default"
                        type="button">Cancel</button></a>
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kel_4_Gol_F_BWS\UJI COBA\dokternak\resources\views/backend/data_tutorial/create.blade.php ENDPATH**/ ?>