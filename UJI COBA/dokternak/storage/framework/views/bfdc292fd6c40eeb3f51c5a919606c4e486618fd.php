
  
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
      <div class="col-15">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
       <?php endif; ?>
        
            <div class="card shadow">
              <div class="card-body">
                <div class="row align-items-center mb-2">
                  <div class="col">
                    <h5 class="card-title">Data Dokter</h5>
                    </div>
                  <div class="col-auto">
                    <div class="form">
                      <a href="<?php echo e(route('dokter.create')); ?>"><button class="btn btn-primary"
                          type="button"><i class="fa fa-plus"></i><span>Tambah</span></button></a>
                    </div>
                  </div>
                </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Tempat</th>
                      <th>Telpon</th>
                      <th>Foto</th>
                      <th>Sertifikasi</th>
                      <th>Id Jabatan</th>
                      <th>Jadwal Kerja</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->jenis_kelamin); ?></td>
                        <td><?php echo e($item->alamat); ?></td>
                        <td><?php echo e($item->tempat); ?></td>
                        <td><?php echo e($item->telpon); ?></td>
                        <td><?php echo e($item->foto); ?></td>
                        <td><?php echo e($item->sertifikasi); ?></td>
                        <td><?php echo e($item->id_jabatan); ?></td>
                        <td><?php echo e($item->jadwal_kerja); ?></td>
                        <td><?php echo e($item->username); ?></td>
                        <td><?php echo e($item->password); ?></td>
                        <td>
                        <div class="btn-group">
                            <a href="<?php echo e(route('dokter.edit',$item->id_dokter)); ?>" class="btn btn-warning">Edit<i class="fa fa-edit"></i></a>
                            <form action="<?php echo e(route('dokter.destroy',$item->id_dokter)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus
                                <i class="fa fa-trash-o"></i></button>
                            </form>
                        </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div> <!-- end section -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</main> <!-- main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kel_4_Gol_F_BWS\UJI COBA\dokternak\resources\views/backend/dokter/index.blade.php ENDPATH**/ ?>