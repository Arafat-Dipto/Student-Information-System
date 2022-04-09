<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Student</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-7">

            <div class="card p-3">
                <h3>Fill the Student Information Form</h3>
                <form action="" enctype="multipart/form-data" method="POST">
                    <?php echo csrf_field(); ?>

                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo e($student->name); ?>"  class="form-control"><br>
                    <label>Gender</label><br>
                    <select name="gender" id=""  value="<?php echo e($student->gender); ?>"  class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select><br>
                    <label>Email</label>
                    <input type="email" name="email"  value="<?php echo e($student->email); ?>"  class="form-control"><br>
                    <label>Mobile</label>
                    <input type="number" name="mobile" value="<?php echo e($student->mobile); ?>"  class="form-control"><br>
                    <label>Class</label>
                    <input type="text" name="class" value="<?php echo e($student->class); ?>"  class="form-control"><br>
                    <label>Education Year</label>
                    <input type="text" name="edu_year" value="<?php echo e($student->edu_year); ?>"  class="form-control"><br>
                    <label>Address</label><br>
                    <textarea name="address" class="form-control" id="" cols="10" rows="5"><?php echo e($student->address); ?></textarea><br>
                    <label>Photo</label>
                    <img src="<?php echo e(asset('/images/'.$student->photo)); ?>" alt="" width="20%">
                <input type="hidden" name="prev_img" value="<?php echo e($student->photo); ?>" >
                <input type="file" name="photo" accept="image/*" class="form-control mb-3">
                    <br>
                    
                    <input type="submit" class="btn btn-primary" name="submit" value="Add">
                </form>
            </div>
        </div>
        <div class="col-lg-5">

        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.homeMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dipto/Desktop/projects/student_info_system/resources/views/edit.blade.php ENDPATH**/ ?>