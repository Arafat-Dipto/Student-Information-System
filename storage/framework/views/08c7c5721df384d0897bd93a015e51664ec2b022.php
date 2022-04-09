<?php $__env->startSection('content'); ?>


   <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Students</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="d-flex">
                    <div class="col-md-8 mb-3">
                        <form action="<?php echo e(url('/search')); ?>" method="GET" class="d-flex">
                        <input type="text" class="form-control" name="search_value" placeholder="Search..."> &nbsp;&nbsp; <input type="submit" class="btn btn-outline-secondary btn-md" name="Search" value="Search">
                    </form>
                </div>
                <div class="col-md-4 mb-3">
                    <a class="btn btn-primary" href="<?php echo e(route('student.create')); ?>">Create</a>
                </div>
                </div>
               
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Class</th>
                                <th>Education Year</th>
                                <th>Address</th>
                                <th>Photo</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($student->name); ?></td>
                                    <td><?php echo e($student->gender); ?></td>
                                    <td><?php echo e($student->email); ?></td>
                                    <td><?php echo e($student->mobile); ?></td>
                                    <td><?php echo e($student->class); ?></td>
                                    <td><?php echo e($student->edu_year); ?></td>
                                    <td><?php echo e($student->address); ?></td>
                                    <td><img src="<?php echo e(asset('/images/'.$student->photo)); ?>" alt="" width="20%"></td>
                                    <td>
                                        <a href="<?php echo e(route('student.edit',$student->id)); ?>">Edit</a>&nbsp;&nbsp;
                                        <a onclick="return confirm('are you sure?');" href="<?php echo e(route('student.delete',$student->id)); ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($students->links()); ?>


                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.homeMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dipto/Desktop/projects/student_info_system/resources/views/index.blade.php ENDPATH**/ ?>