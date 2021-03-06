<?php $__env->startSection('css'); ?>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="<?php echo e(URL::to('public/admin/assets/js/bootstrap-notify.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">
 <div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Professional User</h4>
        </div>
           
            <div style="padding-right: 15px;" class="text-right">
                <a href="<?php echo e(URL::to('newProfessionalUser')); ?>" class="btn btn-warning">Create New Professional User</a>
            </div>

            <div class="card-content table-responsive">
                <table class="mdl-data-table" id="example" border="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($posts->first_name); ?></td>
                        <td><?php echo e($posts->email); ?></td>
                        <td><?php echo e($posts->mobile); ?></td>
                        <td>
                             <a href="editProfessionalUser<?php echo e($posts->id); ?>" type="button" rel="tooltip" class="btn btn-success btn-xs" data-original-title="" title="Edit">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div></a>
                        </td>
                        <td>
                             <a href="deleteProfessionalUser<?php echo e($posts->id); ?>" type="button" rel="tooltip" class="btn btn-danger btn-xs" data-original-title="" title="Delete" onclick="return ConfirmDelete()">
                            <i class="material-icons">delete</i>
                            <div class="ripple-container"></div></a>
                        </td>
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>

            </div>
        </div>
    </div>
                
</div>
<?php if(Session::has('message')): ?>
    <script>
        var msg = "<?php echo e(Session::get('message')); ?>";
            type = ['','info','success','warning','danger'];
                $.notify({
                icon: "notifications",
                message: msg
                },{
                    type: 'success',
                    timer: 1000,
                    placement: {
                        from: 'bottom',
                        align: 'right'
                    }
                });
    </script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
        <script type="text/javascript">
       $(document).ready(function() {
       $('#example').DataTable( {
        columnDefs: [{
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }]
            });
            });
        </script>
         <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete Professionals User?");
            if (x)
            return true;
            else
            return false;
        }
        </script>
         <script type="text/javascript">
          setTimeout(function() {
          $('#successMessage').fadeOut('slow');
          }, 2000);
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>