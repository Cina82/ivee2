<?php $__env->startSection('contents'); ?>
 <div class="content">
	<div class="col-md-12">
 	<div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New SubCategory</h4>
        </div>
        <div class="card-content">
        <?php if(Session::has('message')): ?>
		<p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
     	<?php endif; ?>
        	<form method="post" action="saveSubCategory">
	        	<?php echo e(csrf_field()); ?>

	            <div class="row">
	            	<div class="col-md-12">
	            		<div class="col-md-6">
	            		<div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
	                		 	<select name="proCategory" id="proCategory" class="selectpicker" required>
                                <option selected>Select Category</option>
                                <?php $__currentLoopData = $ary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value ="<?php echo e($rows->id); ?>"><?php echo e($rows->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                              </div>
	            		</div>
	            		<div class="col-md-6">
	                   <div class="form-group label-floating is-empty <?php echo e($errors->has('Name') ? ' has-error' : ''); ?>">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" required> 
							<span class="material-input"></span>
					  	</div>
					  	</div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
						   <div class="form-group label-floating is-empty <?php echo e($errors->has('Priority') ? ' has-error' : ''); ?>">
								<label class="control-label">Priority</label>
								<input class="form-control" type="text" name="priority" id="Priority" onkeydown='return((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) 
   									|| event.which == 8 || event.which == 46' required> 
								<span class="material-input"></span>
						   </div>
	                   </div>
	                   <div class="col-md-6" style="margin-top: 29px">
		                	<div class="checkbox">
								<label>
									<input type="checkbox" name="status" id="status" value="1">
									Status
								</label>
							</div>
						</div>
	                </div>
	                 
	                <button type="submit" class="btn btn-success pull-right">Save<div class="ripple-container"></div>
					</button>
			</form>
	    </div>
	                        
	</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script src="http://demos.creative-tim.com/material-kit-pro/assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>