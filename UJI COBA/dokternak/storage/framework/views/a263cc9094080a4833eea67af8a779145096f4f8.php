
  
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
            <?php echo e(isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan'); ?> Peternak
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
                  <form class="needs-validation" id="peternak_form" method="POST"
                            action="<?php echo e(isset($peternak) ? route('peternak.update',$peternak->id) : 
                            route('peternak.store')); ?>">
                                <?php echo csrf_field(); ?>

                                <?php echo isset($peternak) ? method_field('PUT') : ''; ?>

                      <input type="hidden" name="id" value="<?php echo e(isset($peternak) ? $peternak->id : ''); ?>"> <br/>
                      <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Nama Depan</label>
                        <input class="form-control" id="name" name="namadepan_peternak" minlength="5" type="text" placeholder="Masukkan Nama Depan"
                        value="<?php echo e(isset($peternak) ? $peternak->namadepan_peternak : ''); ?>"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Nama Belakang</label>
                        <input class="form-control" id="name" name="namabelakang_peternak" minlength="5" type="text" placeholder="Masukkan Nama Belakang"
                        value="<?php echo e(isset($peternak) ? $peternak->namabelakang_peternak : ''); ?>"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div> <!-- /.form-row -->
                    <div class="form-row">
                    </div>
                    <div class="form-row">
                      <div class="col-md-8 mb-3">
                        <label for="exampleInputEmail2">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" name="email_peternak" minlength="5" placeholder="Masukkan email" aria-describedby="Masukkan email" 
                        value="<?php echo e(isset($peternak) ? $peternak->email_peternak : ''); ?>"  
                        required>
                        <div class="invalid-feedback"> Please use a valid email </div>
                        <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                    </div> <!-- /.form-row -->
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">No Hp</label>
                        <input class="form-control" id="name" name="namabelakang_peternak" minlength="5" type="integer" placeholder="Masukkan No Handphone"
                        value="<?php echo e(isset($peternak) ? $peternak->namabelakang_peternak : ''); ?>"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Jenis Kelamin</label>
                        <input class="form-control" id="name" name="jenis_kelamin" minlength="5" type="text" placeholder="Masukkan Nama Belakang"
                        value="<?php echo e(isset($peternak) ? $peternak->jenis_kelamin : ''); ?>"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Alamat</label>
                        <input class="form-control" id="name" name="alamat" minlength="5" type="text" placeholder="Masukkan Alamat"
                        value="<?php echo e(isset($peternak) ? $peternak->alamat : ''); ?>"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationCustomPassword">Password</label>
                      <div class="input-group">
                        <input type="password" class="form-control" id="validationCustomPassword" name="password" minlength="5" placeholder="Masukkan password" aria-describedby="inputGroupPrepend" 
                        value="<?php echo e(isset($peternak) ? $peternak->password : ''); ?>"  
                        required>
                        <div class="invalid-feedback"> Please choose a password. </div>
                      </div>
                    </div>
                    </div>
                   <!-- /.form-row -->
                   
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="<?php echo e(route('peternak.index')); ?>"><button class="btn btn-default"
                        type="button">Cancel</button></a>
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kel_4_Gol_F_BWS\UJI COBA\dokternak\resources\views/backend/peternak/create.blade.php ENDPATH**/ ?>